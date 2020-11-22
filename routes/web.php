<?php

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
    return view('welcome');
})->name('home');
// Route::view('/about-us','hello');

// Route::get('/admin/{product?}',function($product=null){
// return $product == null ?'List all product categories':'list '.$product;
// })->name('admin-panel');

// Route::get('/admin/{id}',function($id){
//     return "Admin dashboard $id";
// })->where('id','[0-9]+');
// Route::get('/admin/{id}',function($id){
//     return "Admin dashboard $id";
// })->middleware('after')->where('id','[a-zA-Z]+');

// Route::get('profile','HomeController@profile');
// Route::get('index','HomeController@index');
// Route::get('user/profile/{id}','UserProfileController');
// Route::resources([
//     'user'=>'UserController',
//     'brand'=>'BrandController'
// ]
// );

