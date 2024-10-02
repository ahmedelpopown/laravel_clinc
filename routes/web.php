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

 Route::view("home","site/home/index")->name('home.index');
 Route::view("majers","site/majers/index")->name('majers.index');
 Route::view("contact","site/contact/index")->name('contact.index');
 Route::view("doctors","site/doctors/index")->name('doctors.index');
 Route::view("single","site/single/index")->name('single.index');
 Route::view("login","site/login/index")->name('login.index');
 Route::view("signup","site/signup/index")->name('signup.index');