<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\UserComponent;

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

Route::get('/home',[HomeComponent::class,'home']);

Route::get('/redirects',[HomeController::class,'index']);

Route::post('/addmod',[HomeController::class,'addmod']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');

Route::get('showusers',[HomeController::class,'showusers']);
Route::get('delete/{id}',[HomeController::class,'delete']);
Route::get('edit/{id}',[HomeController::class,'edituser']);
Route::post('edit/{id}',[HomeController::class,'editbtn']);