<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MarketingOrderController extends Controller
{
    public function index()
    {
        // ambil data order dari session
        $orders = Session::get('orders', []);

        return view('marketing.orders', compact('orders'));
    }
}
