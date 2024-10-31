<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });
Route::view('/register','auth.register')->name('register');
Route::view('/','auth.login')->name('login');
Route::view('dashboard','page.index')->name('index');
Route::view('/members','page.Membership')->name('Membership');
Route::View('/donations','page.donation')->name('donation');
Route::view('/library','page.library')->name('library');
Route::view('/admin/profile','page.profile')->name('profile');


Route::post('/register', [authController::class, 'register'])->name('register');
