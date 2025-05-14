<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
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


Route::controller(ThemeController::class)->name('theme.')->group(function (){
    Route::get('/','index')->name('index');
    Route::get('/blogs','blogs')->name('blogs');
    Route::get('/blog-info','blogInfo')->name('blog-info');
    Route::get('/movie-info','movieInfo')->name('movie-info');
    Route::get('/movies','movies')->name('movies');
    Route::get('/movies/{id}','moviesID')->name('moviesID');
    Route::get('/contact','contact')->name('contact');
    Route::get('/not-found','notFound')->name('not-found');
});



Route::resource('/movie' , MovieController::class)->except('show');
Route::get('movie/{movie:name}',[MovieController::class ,'show'])->name('movie.show');


Route::resource('/blog' , BlogController::class);

Route::post('comment',[CommentController::class , 'store'])->name('comment.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';