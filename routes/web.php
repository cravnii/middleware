<?php

use App\Http\Middleware\Policeman;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home/{type}', function ($type) {
    return "<h1>اهلا بك في الطريق العام</h1>";
})->middleware('policeman');

// Route::get('/home', function () {
//     return "<h1>اهلا بك في الطريق العام</h1>";
// })->middleware('policeman:admin');


Route::get('/admin' , function(){
   return "<h1>  تفضل تمتلك شروط الطريق </h1>";
})->name("admin");


Route::get('/user' , function(){
    return "<h1>  عفوا لا تمتلك شروط الطريق </h1>";
 })->name("username");
