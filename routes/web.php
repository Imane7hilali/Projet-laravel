<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\appartementController;
use App\Http\Controllers\chaletController;
use App\Http\Controllers\riadController;
use App\Http\Controllers\villaController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\message2Controller;
use App\Http\Controllers\reserverController;
use App\Http\Controllers\reservationController;
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
 
Route::resource('/contact', messageController::class);
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
Route::get('filtre',[App\Http\Controllers\FirstController::class,'filtre']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('admin',[App\Http\Controllers\FirstController::class,'admin']);
Route::resource('admin/hotel' , HotelController::class);
Route::resource('admin/user' , UserController::class);
Route::get('admin/profile' , function(){
    return view('profile');
});
Route::resource('admin/riad' , riadController::class);
Route::resource('admin/villa' , villaController::class);
Route::resource('admin/appartement' , appartementController::class);
Route::resource('admin/chalet' , chaletController::class);
Route::resource('admin/message', message2Controller::class);
Route::resource('reserver', reserverController::class);
Route::resource('admin/reserver', reservationController::class);