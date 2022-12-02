<?php

use App\Http\Controllers\lessoncontroller;
use App\Http\Controllers\registercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//  return $request->user();
//});
Route::get('/index', array(lessoncontroller::class, 'index'));

//Route::post('/register', 'registercontroller@register');


Route::post('/index', array(lessoncontroller::class, 'index'));
Route::post('/register', array(registercontroller::class, 'register'));
Route::post('/loginuser', array(\App\Http\Controllers\logincontroller::class, 'login'));
Route::middleware('auth:api')->post('/logout', array(\App\Http\Controllers\logincontroller::class, 'logout'));
