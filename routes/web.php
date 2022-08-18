<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\PostController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/Posts', ['App\Http\Controllers\PostController'::class, "index"]) ;
Route::get(uri:'/Posts', action:'App\Http\Controllers\PostController@index');
Route::get(uri:'/ShowTests', action:'App\Http\Controllers\ShowTestTypeController@show');
Route::post(uri:'/eval-test', action:'App\Http\Controllers\EvalTestController@store');
Route::get(uri:'/show-results', action:'App\Http\Controllers\ShowResultController@show');

