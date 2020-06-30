<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function index(){
        return view('/Profiles/ProductsAdd');
    }
    public function Add(Request $Request){
       //$this->validate($Request,[''])
        //   return view('Profiles/ProductsAdd');
        $Product = new Product([
            'title'=>$Request->get('title'),
            'description' => $Request->get('description'),
            'image'=>$Request->get('image'),
            'review'=>$Request->get('review'),
            'qte'=>$Request->get('qte')
        ]);
        $Product->save();
        return redirect('/Products')->with('bien ajoutee');
    }
    public function Show(){
        $Products=Product::all();
        return view("Profiles.Products")->with('Products',$Products);
    }
    public function edit($id){
        $Product=Product::find($id);
        return view('Profiles.ProductEdit',['Product'=>$Product]);
    }
    public function update(Request $Request,$id){
        $Product=Product::find($id);
        $Product->title=$Request->input('title');
        $Product->description=$Request->input('description');
        $Product->image=$Request->input('image');
        $Product->review=$Request->input('review');
        $Product->qte=$Request->input('qte');
        $Product->save();
        return redirect('/Products');
    }
    public function destroy($id){
        $Product=Product::find($id);
        $Product->delete();
        return redirect('/Products');
    }
}
