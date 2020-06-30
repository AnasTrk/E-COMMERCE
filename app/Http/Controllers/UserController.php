<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $Users=User::all();
        return view('Profiles.Users',['Users'=>$Users]);
    }
    public function edit($id){
        $User=User::find($id);
        return view("Profiles.User",['User'=>$User]);
    }
    public function update($id,Request $Request){
        $Categorie=Categorie::find($id);
        $Categorie->name=$Request->get('name');
        $Categorie->lastname=$Request->get('lastname');
        $Categorie->lastname=$Request->get('email');
        $Categorie->save();
        return redirect("/Categories");
}
}
