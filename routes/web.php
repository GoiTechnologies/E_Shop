<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
  $cats = DB::table('categories')->get();
  $prods = DB::table('products')->paginate(8);
  return view('welcome')->with("cats",$cats)->with("prods",$prods);
});


Route::get('logout', 'Auth\LoginController@logout');



Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories_list', 'HomeController@categories_list')->name('categories_list');
Route::get('/products_list', 'HomeController@products_list')->name('products_list');
Route::get('/show_item/{id}', 'shopController@show_item')->name('show_item');
Route::get('/checkout', 'shopController@checkout')->name('checkout');
Route::get('/mis_cursos', 'HomeController@mis_cursos')->name('mis_cursos');
Route::post('/add_category', 'HomeController@add_category')->name('add_category');
Route::post('/delete_category', 'HomeController@delete_category')->name('delete_category');
Route::post('/add_product', 'HomeController@add_product')->name('add_product');
Route::post('/delete_product', 'HomeController@delete_product')->name('delete_product');
Route::post('/search', 'shopController@search')->name('search');

// Shoping Cart routes
Route::post('/sc_add', 'HomeController@sc_add')->name('sc_add');
Route::post('/sc_delete', 'HomeController@sc_delete')->name('sc_delete');






// Success ROUTES
Route::get('/buy_success', function () {
  return view('buy_success');
});
Route::post('/buy_success_process', 'HomeController@success_purchase')->name('buy_success_process');
