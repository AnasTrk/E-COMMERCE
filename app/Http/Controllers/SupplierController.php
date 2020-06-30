<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    public function index(){
        $Suppliers=Supplier::all();
        return \view('Profiles.Suppliers',['Suppliers'=>$Suppliers]);
    }
}
