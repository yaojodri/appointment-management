<?php

use App\Mail\WelcomeMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\SuperAdminGuard;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;



// Route::redirect('/','/login')->name('root');
Route::get('/register', function(Request $request) {
  return view('auth.register');
})->name('register')->middleware('guest');
Route::post('/register',[AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/mail',function(){
  Mail::to('test@test.com')->send(new WelcomeMessage());
    });
Route::get('/login',[AuthController::class, 'getLoginPage'])->name('auth.loginPage')->middleware('guest');
Route::post('/login',[AuthController::class, 'authenticate'])->name('auth.login')->middleware('guest');
Route::post('/logout',[AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


Route::resource('doctors',DoctorController::class)->middleware('auth');
Route::resource('appointments',AppointmentController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

//  Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');


Route::get('/homepage', function(Request $request) {
    return view('homepage');
})->name('homepage');








