<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function show(): View
    {
        return view('site.order.show');
    }

    public function history(): View
    {
        return view('site.order.history');
    }
}
