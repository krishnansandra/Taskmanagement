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

Route::get('/', function () {
    return view('home');
});


//Route::post('/register', [RegistersController::class, 'register'])->name('register');


//Route::get('/posts/{id}',"pcontroller@index");


Route::get('/About', function () {
    $data=[
        "message"=>"HELLO",
        "Number"=>10];
    return view('About',$data);
});


Route::get('/posts', "postController@index");
Route::get('/posts/create', "postController@create");
Route::post('/posts', "postController@store");
Route::get('/posts/{postid}', "postController@show");
Route::get('/posts/{postid}/edit', "postController@edit");
Route::put('/posts/{postid}', "postController@update");
Route::delete('/posts/{postid}', "postController@destroy");
Route::get('/posts/{postid}/delete', "postController@del");
Route::get('/posts', "postController@list");


Route::get('/register', "RegistersController@index");
Route::get('/register/create', "RegistersController@create");
Route::post('/register', "postControllRegistersControllerer@store");

