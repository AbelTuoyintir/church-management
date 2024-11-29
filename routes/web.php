<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\rsvpController;
use App\Http\Controllers\announcementController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });
Route::view('/register','auth.register')->name('register');
Route::view('/','auth.login')->name('login');


//view routes
Route::view('/admin/dashboard','page.index')->middleware('auth')->name('index');
Route::view('/admin/members','page.Membership')->middleware('auth')->name('Membership');
Route::View('/admin/donations','page.donation')->middleware('auth')->name('donation');
Route::view('/admin/library','page.library')->middleware('auth')->name('library');
Route::view('/admin/profile','page.profile')->middleware('auth')->name('profile');
Route::view('/admin/events','page.event')->name('event');


//Authentication Routes
Route::post('/register', [authController::class, 'register'])->name('register');
Route::post('/',[AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');//logout routes

//routes for dashboard
Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::post('/admin/dashboard/store', [dashboardController::class, 'store'])->name('events.dashboard');



//members route codes
Route::get('/admin/members', [memberController::class, 'index'])->middleware('auth')->name('Membership.index');
Route::post('/admin/members', [memberController::class, 'store'])->name('Membership.store');
Route::delete('/admin/members/{id}', [memberController::class, 'destroy'])->name('Membership.destroy');
Route::get('/admin/members/edit/{id}', [MemberController::class, 'edit'])->name('Membership.edit');
Route::put('/admin/members/{id}', [MemberController::class, 'update'])->name('Membership.update');


//donation routes
Route::post('/admin/donations',[donationController::class,'donation'])->name('donation');
Route::delete('/admin/donations/{id}', [DonationController::class, 'destroy'])->name('donation.destroy');
Route::get('/admin/donations', [donationController::class,'showDonation'])->name('donation.showDonation');
Route::get('/admin/donations/edit/{id}', [donationController::class, 'edit'])->name('donation.edit');
Route::put('/admin/donations/{id}', [donationController::class, 'update'])->name('donation.update');

//route for events
Route::post('/admin/events/store', [eventController::class, 'store'])->name('events.store');
Route::get('/admin/events', [eventController::class,'showEvent'])->name('event.showEvent');
Route::post('/admin/rsvp/store', [rsvpController::class, 'store'])->name('rsvp.store');
Route::post('/admin/volunteer/signup', [eventController::class, 'volunteer'])->name('volunteer.volunteer');





Route::get('/admin/library', [BookController::class, 'index'])->name('library.index');
Route::post('/admin/library', [BookController::class, 'store'])->name('library.store');
Route::get('/admin/library/edit/{id}', [BookController::class, 'edit'])->name('library.edit');
Route::delete('/admin/library/{id}', [BookController::class, 'destroy'])->name('library.destroy');
Route::put('/admin/library/{id}', [BookController::class, 'update'])->name('library.update');




Route::post('/send-announcement', [announcementController::class, 'sendAnnouncement'])->name('send-announcement');

