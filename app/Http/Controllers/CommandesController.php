<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
class CommandesController extends Controller
{
    public function index(){
        $Commandes = Commande::all();
        return view('Profiles.Orders', ['Commandes' => $Commandes]);

    }
}
