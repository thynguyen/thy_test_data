<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

use App\Models\Golf;
use App\Models\Hotel;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Admin;

class DashboardController extends Controller
{
    public $months = [];
    public function __construct() {
        for($i = 1; $i <= 12; $i++) {
            $j = $i;
            if($i < 10) {
                $j = '0'.$i;
            }
            $this->months[$j] = 'Tháng ' . $i;
        }
    }

    public function show(): View
    {
        $role = Auth::guard('admin')->user()->roles[0]->name;
        $userId = Auth::guard('admin')->user()->id;

        $isSupperAdmin = true;
        if($role !== 'superadmin') {
            $isSupperAdmin = false;
        }

        $consultants = Admin::with(['roles'])
        ->whereHas('roles', function ($q) {
            $q->where('name', 'consultant');
        })
        ->get();

        return view('admin.dashboard.show', compact('isSupperAdmin', 'consultants'));
    }

    public function chartLine(Request $request)
    {
        $chartGolfs = $chartHotels = $chartCars = [];
        foreach($this->months as $key => $month) {
            $chartGolfs[$key] = 0;
            $chartHotels[$key] = 0;
            $chartCars[$key] = 0;
        }

        $year = $request->search_year;
        if($year === NULL || $year === '') {
            $year = date('Y');
        }

        $golfs = Golf::where(function($q) use ($year) {
                $q->where(\DB::raw('DATE_FORMAT(created_at, "%Y")'), $year);
            })
            ->select(\DB::raw('DATE_FORMAT(created_at, "%Y-%m") AS formatDate'), \DB::raw('COUNT(id) as total'))
            ->groupBy('formatDate')
            ->orderBy('formatDate', 'ASC')
            ->get();
        
        if($golfs->count()) {
            foreach($golfs as $golf) {
                $part = explode('-', $golf->formatDate);
                if(isset($chartGolfs[$part[1]])) {
                    $chartGolfs[$part[1]] = $golf->total;
                }
            }
        }

        $hotels = Hotel::where(function($q) use ($year) {
            $q->where(\DB::raw('DATE_FORMAT(created_at, "%Y")'), $year);
        })
        ->select(\DB::raw('DATE_FORMAT(created_at, "%Y-%m") AS formatDate'), \DB::raw('COUNT(id) as total'))
        ->groupBy('formatDate')
        ->orderBy('formatDate', 'ASC')
        ->get();
    
        if($hotels->count()) {
            foreach($hotels as $hotel) {
                $part = explode('-', $hotel->formatDate);
                if(isset($chartGolfs[$part[1]])) {
                    $chartHotels[$part[1]] = $hotel->total;
                }
            }
        }

        $cars = Car::where(function($q) use ($year) {
            $q->where(\DB::raw('DATE_FORMAT(created_at, "%Y")'), $year);
        })
        ->select(\DB::raw('DATE_FORMAT(created_at, "%Y-%m") AS formatDate'), \DB::raw('COUNT(id) as total'))
        ->groupBy('formatDate')
        ->orderBy('formatDate', 'ASC')
        ->get();
    
        if($cars->count()) {
            foreach($cars as $car) {
                $part = explode('-', $car->formatDate);
                if(isset($chartCars[$part[1]])) {
                    $chartCars[$part[1]] = $car->total;
                }
            }
        }
        $chartOne = [
            'months' => array_keys($this->months), 
            'golfs' => array_values($chartGolfs),
            'hotels' => array_values($chartHotels),
            'cars' => array_values($chartCars),
            'year' => $year
        ];

        return response()->json(['code' => 1, 'message' => 'Thành công', 'results' => $chartOne]);
    }

    public function chartBar(Request $request)
    {
        $role = Auth::guard('admin')->user()->roles[0]->name;
        $userId = Auth::guard('admin')->user()->id;

        $charts = [];
        foreach($this->months as $key => $month) {
            $charts[$key] = 0;
        }

        $year = $request->search_year;
        $sConsultant = $request->consultant;
        if($year === NULL || $year === '') {
            $year = date('Y');
        }

        $customers = Customer::with(['user'])
            // ->whereHas('user', function ($q) use($sMember) {
            //     if($sMember !== NULL && $sMember !== '') {
            //         $q->where('full_name', $sMember);
            //     }
            // })
            ->where(function($q) use ($sConsultant, $year) {
                $q->where(\DB::raw('DATE_FORMAT(created_at, "%Y")'), $year);                
            })
            ->where(function($q) use ($role, $userId, $sConsultant) {
                if($role !== 'superadmin') {
                    $q->where('admin_id', $userId);
                } else {
                    if($sConsultant !== NULL && $sConsultant !== '') {
                        $q->where('admin_id', $sConsultant);
                    }
                }
            })
            ->select(\DB::raw('DATE_FORMAT(created_at, "%Y-%m") AS formatDate'), \DB::raw('COUNT(id) as total'))
            ->groupBy('formatDate')
            ->orderBy('formatDate', 'ASC')
            ->get();
        
        if($customers->count()) {
            foreach($customers as $customer) {
                $part = explode('-', $customer->formatDate);
                if(isset($charts[$part[1]])) {
                    $charts[$part[1]] = $customer->total;
                }
            }
        }
        $chartSecond = [
            'months' => array_keys($this->months), 
            'customers' => array_values($charts),
            'year' => $year
        ];

        return response()->json(['code' => 1, 'message' => 'Thành công', 'results' => $chartSecond]);
    }
}
