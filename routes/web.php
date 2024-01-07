<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\MainController;
Route::get('/index',[MainController::class,'index']);
Route::get('/about',[MainController::class,'about']);
Route::get('/services',[MainController::class,'services']);
Route::get('/pricing',[MainController::class,'pricing']);
Route::get('/portfolio',[MainController::class,'portfolio']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/signin',[MainController::class,'signin']);
Route::post('/submit',[MainController::class,'submit']);
Route::get('/all',[MainController::class,'alldata']);
Route::get('/login',[MainController::class,'login']);
Route::post('/save',[MainController::class,'save']);
Route::get('/edit{ep}',[MainController::class,'edit']);
Route::post('/update',[MainController::class,'update']);
Route::get('/delete{del}',[MainController::class,'delete']);
Route::get('/block{blk}',[MainController::class,'block']);
Route::get('/unblock{unblk}',[MainController::class,'unblock']);
Route::get('/logout',[MainController::class,'logout']);
Route::get('/displayclient',[MainController::class,'displayclient']);
Route::post('/smallform',[MainController::class,'smallform']);