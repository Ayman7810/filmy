<?php

use App\Http\Controllers\ThemeController;
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


Route::controller(ThemeController::class)->name('theme.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/category','category')->name('category');
    Route::get('/contact','contact')->name('contact');
    Route::get('/blog','blog')->name('blog');
    Route::get('/login','login')->name('login');
    Route::get('/register','register')->name('register');
});

// Route::get('/', function () {
//     return view('welcome');
// });