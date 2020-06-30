<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    return redirect('/home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carte','ShoppingCartController@Carts');
Route::get('/checkout','CheckOutController@PasserOrders');
Route::get('/details','DetailsController@ShowDetails');
Route::get('/shop','ShoppingController@ShowArticles');
Route::get('/dashboard/{id}','DashboardController@ShowDashboard');
Route::get('/Products','ProductsController@Show');
Route::get('/Products/{id}/edit','ProductsController@edit');
Route::delete('/Products/{id}','ProductsController@destroy');
Route::put('/Products/{id}','ProductsController@update');
Route::get('/ProductsAdd','ProductsController@index');
Route::post('/ProductsAdd','ProductsController@Add');
Route::get('/Categories','CategorieController@index');
Route::get('/Categories/Add','CategorieController@AddCategorie');
Route::post('/CategorieAdd','CategorieController@store');
Route::get('/Categories/{id}/edit','CategorieController@edit');
Route::put('/Categories/{id}','CategorieController@update');
Route::delete('/Categories/{id}','CategorieController@destroy');
Route::get('/Users/{id}/edit','UserController@edit');
Route::put('/Users/{id}','UserController@update');
//Route::get('/AddPanier','PanierController@index');
Route::get('/Users','UserController@index');
Route::get('/charts', function(){
    return view('Profiles.charts');
});
Route::get('/Orders', 'CommandeController@index');
Route::get('/Suppliers', 'SupplierController@index');
Auth::routes();

