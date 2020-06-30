<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
class ShoppingController extends Controller
{
    public function __construct(){
       // $this->middleware('auth');
    }
    public function ShowArticles(){
        $Products = Product::all();
        return view('ogani.shop-grid',['Products'=>$Products]);
    }
}
