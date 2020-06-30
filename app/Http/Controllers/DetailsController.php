<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function ShowDetails(){
        return view('ogani/shop-details');
    }
}
