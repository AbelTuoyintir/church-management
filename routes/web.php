<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });
Route::view('/welcome', 'page.welcome')->name('welcome');
Route::view('/login','auth.login')->name('login');
Route::view('/member','page.member')->name('member');
Route::view('/donation','page.donation')->name('donation');



Route::post('/member',[memberController::class,'member'])->name('member');
Route::post('/donation',[donationController::class,'donation'])->name('donation');
Route::delete('/member/{id}', [MemberController::class, 'destroy'])->name('member.destroy');
Route::delete('/donation/{id}', [DonationController::class, 'destroy'])->name('donation.destroy');

Route::get('/member', [MemberController::class, 'showMembers'])->name('member.page');
Route::get('/', [MemberController::class, 'show'])->name('welcome.page');
Route::get('/donation', [donationController::class,'showDonation'])->name('donation.showDonation');

Route::get('/welcome', function () {
    return view('welcome'); // Make sure you have a 'welcome.blade.php' view in the resources/views directory.
})->name('welcome');

Route::get('/donation/{id}/edit', [DonationController::class, 'edit'])->name('donation.edit');
Route::put('/donation/{id}', [DonationController::class, 'update'])->name('donation.update');


Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->name('logout');

//authenication routes
Route::view('register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');


