<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MarketController extends Controller
{
    public function show(): View
    {
        return view('site.market.show');
    }
}
