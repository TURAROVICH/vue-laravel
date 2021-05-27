<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthApiController,UsersApiController,ProductsController,ApiProductsController
};

Route::middleware(['auth'])->group(function () {
//routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/{id}', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('welcome');
});
Route::get('/add', function () {
    return view('welcome');
});
Route::get('/update/product/{id}', function () {
    return view('welcome');
});
Route::post('/add',"ProductsController@add");
Route::post('/product/delete',"ProductsController@delete");
Route::post('/update/product',"ProductsController@update");
//endroutes


//Api
Route::get('api/users','UsersApiController@api');
Route::get('api/user/actions','UsersApiController@actions');
Route::get('api/user','AuthApiController@api');

Route::get('api/products','ApiProductsController@all');
Route::post('api/product','ApiProductsController@one');
//end Api
});
Auth::routes();
