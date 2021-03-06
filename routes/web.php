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

// Route::get('customers', function () {
//     $faker = Faker\Factory::create();
//    dd($faker->company);

// });

// Route::get('/blade/{name?}','BladeController@index')->name('home');
// Route::get('/about-us','BladeController@about')->name('about');
// Route::resource('employee','EmployeeController');

Route::get('/users',[
    'uses'=>'UsersController@index',
    'as' =>'users.index'
]);

Route::get('/register',[
    'uses'=>'UsersController@create',
    'as' =>'users.create'
]);

Route::post('/register',[
    'uses'=>'UsersController@store',
    'as' =>'users.create'
]);

