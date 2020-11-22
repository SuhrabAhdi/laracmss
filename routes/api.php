<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("products",function(){
$products = [
    [
        'name'=>'HP Laptop',
        'price' => 34000
    ],
    [
        'name'=>'Mac book pro',
        'price' => 84000
    ],

    [
        'name'=>'Power bank',
        'price' => 1500
    ]
];
return json_encode($products);
});

Route::apiResource('brand','API\BrandController');
