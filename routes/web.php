<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('quest')->group(function () {
   Route::get('/login', [LoginController::class, 'index'])->name('login');
   Route::post('/login', [LoginController::class, 'store'])->name('login.store');

   Route::get('/register', [RegisterController::class, 'index'])->name('register');
   Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/', function () {
    return view('home.index');
})->name('home');

require __DIR__.'/user.php';
require __DIR__.'/admin.php';
