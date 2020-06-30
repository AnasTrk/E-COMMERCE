<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
class CategorieController extends Controller
{
    public function index(){
        $Categories=Categorie::all();
        return view('Profiles.Categories')->with('Categories',$Categories);
    }
    public function AddCategorie(){
        return view('Profiles.addCategorie');
    }

    public function store(Request $Request){
        $Categorie=new Categorie();
            $Categorie->title=$Request->get('title');
            $Categorie->categorie_description=$Request->get('description');
            $Categorie->save();
            return \redirect("/Categories");
    }
    public function edit($id){
        $Categorie=Categorie::find($id);
            return view("Profiles.CategorieEdit",['Categorie'=>$Categorie]);
    }
    public function update($id,Request $Request){
            $Categorie=Categorie::find($id);
            $Categorie->title=$Request->get('title');
            $Categorie->categorie_description=$Request->get('description');
            $Categorie->save();
            return redirect("/Categories");
    }
    public function destroy($id){
        $Categorie=Categorie::find($id);
        $Categorie->delete();
        return redirect("/Categories");
    }
}
