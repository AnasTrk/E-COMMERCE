<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
class CommandeController extends Controller
{
    public function index(){
        $Orders=Commande::all();
        return \view('Profiles.Orders',['Orders'=>$Orders]);
    }
}
