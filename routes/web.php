<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

use App\Http\Livewire\UserComponent;
use App\Http\Livewire\AddMenuComponent;


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

Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);

Route::get('/register',[HomeController::class,'register']);
Route::post('/addmember',[HomeController::class,'addmember']);

Route::get('/login',[HomeController::class,'login']);

Route::get('/redirects',[HomeController::class,'index']);

Route::get('/backend',[HomeController::class,'backend']);

// Route::get('/addmenu',[HomeController::class,'addmenu']);
Route::get('addmenu',AddMenuComponent::class);

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Route::post('/addmod',[HomeController::class,'addmod']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');

Route::get('/welcome',[HomeController::class,'welcome']);

Route::get('showusers',[HomeController::class,'showusers']);
Route::get('delete/{id}',[HomeController::class,'delete']);
Route::get('edit/{id}',[HomeController::class,'edituser']);
//Route::post('edit/{id}',[HomeController::class,'editbtn']);
Route::get('/menuitems',[HomeController::class,'menuitems']);