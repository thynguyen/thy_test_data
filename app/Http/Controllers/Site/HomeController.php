<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\Trading;

class HomeController extends Controller
{
    public function show(): View
    {
        $tradings = Trading::paginate(10);

        $topTrandings = Trading::whereIn('code', ['BTC', 'ETH', 'BNB'])->get();

        return view('site.home.show', compact('tradings', 'topTrandings'));
    }
}
