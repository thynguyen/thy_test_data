<?php 
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;

class PackageExport implements FromView
{
    protected $package;
    public $arrKey = [
        'setting_rate_vnd_usd',
        'setting_price_sell_under_30_day',
        'setting_price_sell_under_31_60_day',
        'setting_price_sell_under_61_90_day',
        'setting_price_sell_under_91_120_day',
        'setting_price_sell_under_121_150_day',
        'setting_price_sell_under_151_170_day',
        'setting_price_sell_under_171_230_day',
        'setting_price_sell_under_231_290_day',
        'setting_price_sell_under_over_291_day',
    ];

    function __construct($package) {
        $this->package = $package;
    }

    public function view(): View
    {
        $userId = Auth::guard('admin')->user()->id;
        $role = Auth::guard('admin')->user()->roles[0]->name;

        $isSupperAdmin = true;
        if($role !== 'superadmin') {
            $isSupperAdmin = false;
        }

        $arrTotal = $this->_getAllFee($this->package);
        
        $dateFrom = date_create($this->package->date_from);
        $dateTo = date_create($this->package->date_to);
        $dateDiff = date_diff($dateFrom, $dateTo);

        $dayFormat = sprintf("%d ngày %d đêm", $dateDiff->format('%a') + 1, $dateDiff->format('%a'));

        $title = 'BẢNG TÍNH GIÁ TOUR CHƯA XÁC ĐỊNH';
        if($this->package->status == 1) {
            $title = 'BẢNG TÍNH GIÁ TOUR GOLF';
        }

        return view('admin.package.export', [
            'package' => $this->package,
            'title' => $title,
            'arrTotal' => $arrTotal,
            'dayFormat' => $dayFormat,
            'isSupperAdmin' => $isSupperAdmin
        ]);
    }

    private function _getAllFee($package)
    {
        $calRate = $this->_calRate($package);
        $arrTotal = array(
            'rateUsdVnd' => $calRate['rateVndToUse'],
            'profitPercent' => $calRate['profitPercent'],
            'totalPerson' => 0,
            'totalAllPerson' => 0,
            'profitPerson' => 0,
            'profitAllPerson' => 0,
            'profitInclude' => 0,
            'profitAllInclude' => 0,
            'profitUsdPerson' => 0,
            'profitUsdAllPerson' => 0,
            'totalAll' => 0,
        );
        if($package->packageHotels->count()) {
            foreach($package->packageHotels as $hotel) {
                $arrTotal['totalPerson'] = $arrTotal['totalPerson'] + $hotel->tt_person;
                $arrTotal['totalAllPerson'] = $arrTotal['totalAllPerson'] + $hotel->tt_all_person;
            }
        }
        if($package->packageCars->count()) {
            foreach($package->packageCars as $car) {
                $arrTotal['totalPerson'] = $arrTotal['totalPerson'] + $car->tt_person;
                $arrTotal['totalAllPerson'] = $arrTotal['totalAllPerson'] + $car->tt_all_person;
            }
        }
        if($package->packageGolfs->count()) {
            foreach($package->packageGolfs as $golf) {
                $arrTotal['totalPerson'] = $arrTotal['totalPerson'] + $golf->tt_person;
                $arrTotal['totalAllPerson'] = $arrTotal['totalAllPerson'] + $golf->tt_all_person;
            }
        }
        if($package->packageOthers->count()) {
            foreach($package->packageOthers as $other) {
                $arrTotal['totalPerson'] = $arrTotal['totalPerson'] + $other->tt_person;
                $arrTotal['totalAllPerson'] = $arrTotal['totalAllPerson'] + $other->tt_all_person;
            }
        }

        $arrTotal['profitPerson'] = round(($arrTotal['totalPerson'] * $arrTotal['profitPercent']) / 100);
        $arrTotal['profitAllPerson'] = round(($arrTotal['totalAllPerson'] * $arrTotal['profitPercent']) / 100);

        $arrTotal['profitInclude'] = $arrTotal['profitPerson'] + $arrTotal['totalPerson'];
        $arrTotal['profitAllInclude'] = $arrTotal['profitAllPerson'] + $arrTotal['totalAllPerson'];

        $arrTotal['profitUsdPerson'] = round(($arrTotal['profitInclude'] / $arrTotal['rateUsdVnd']), 2);
        $arrTotal['profitUsdAllPerson'] = round(($arrTotal['profitAllInclude'] / $arrTotal['rateUsdVnd']), 2);

        $arrTotal['totalAll'] = ($arrTotal['totalAllPerson'] + $arrTotal['profitAllPerson']);

        return $arrTotal;
    }

    private function _calRate($package)
    {
        $arrConfigs = Config::whereIn('key', $this->arrKey)->get();
        $arrSetting = [];
        foreach($arrConfigs as $config) {
            $arrSetting[$config->key] = $config;
        }

        $dateFrom = date_create($package->date_from);
        $dateTo = date_create(date('Y-m-d'));
        $totalDay = 1;
        if($dateTo > $dateFrom) {
            $dateDiff = date_diff($dateFrom, $dateTo);
            $totalDay = $dateDiff->format('%a') + 1;
        }

        $profileRate = 0;
        foreach($arrSetting as $key => $item) {
            if($key === 'setting_rate_vnd_usd') {
                continue;
            }

            if($item->optional['expression'] === 'greater_than_equal') {
                $fromVal = $item->optional['from_val'];
                $endVal = $item->optional['end_val'];
                if($totalDay >= $fromVal && $totalDay <= $endVal) {
                    $profileRate = $item->value;
                    break;
                }
            } else if ($item->optional['expression'] === 'greater_than') {

                $endVal = $item->optional['end_val'];
                if($totalDay >= $endVal) {
                    $profileRate = $item->value;
                    break;
                }
            } else if ($item->optional['expression'] === 'less_than') {
                $fromVal = $item->optional['from_val'];
                if($totalDay <= $fromVal) {
                    $profileRate = $item->value;
                    break;
                }
            }

        }

        return [
            'rateVndToUse' => ! empty($arrSetting['setting_rate_vnd_usd']->value) ? $arrSetting['setting_rate_vnd_usd']->value : 24000,
            'profitPercent' => $profileRate,
        ];
        
    }

}