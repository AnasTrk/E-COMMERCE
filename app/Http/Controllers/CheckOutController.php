<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function PasserOrders(){
        return view('ogani/checkout');
    }
}
