<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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
});
 

Route::get('/',[App\Http\Controllers\FirstController::class,'hébergements']);
Route::get('hébergements',[App\Http\Controllers\FirstController::class,'hébergements']);

Route::get('vols',[App\Http\Controllers\FirstController::class,'vols']);

Route::get('voiture_de_location',[App\Http\Controllers\FirstController::class,'voiture_de_location']);

Route::get('hotels',[App\Http\Controllers\FirstController::class,'hotels']);
 
Route::get('appartements',[App\Http\Controllers\FirstController::class,'appartements']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('agadir',[App\Http\Controllers\FirstController::class,'agadir']);

Route::get('tanger',[App\Http\Controllers\FirstController::class,'tanger']);

Route::get('ifrane',[App\Http\Controllers\FirstController::class,'ifrane']);

Route::get('casablanca',[App\Http\Controllers\FirstController::class,'casablanca']);

Route::get('marrakech',[App\Http\Controllers\FirstController::class,'marrakech']);

Route::get('villas',[App\Http\Controllers\FirstController::class,'villas']);

Route::get('chalets',[App\Http\Controllers\FirstController::class,'chalets']);

Route::get('riads',[App\Http\Controllers\FirstController::class,'riads']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin.admin_home',[App\Http\Controllers\FirstController::class,'admin.admin_home']);

 