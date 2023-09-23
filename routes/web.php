<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'home']);

Route::get('/trial', [DemoController::class, 'demo'])->name('demo');

Route::get('/about', [HomeController::class, 'about'])->name('about');

// Blog routes
Route::get('/blog', [HomeController::class, 'blog'])->name('blogs.index');
Route::get('/blog/{slug}', [HomeController::class, 'single'])->name('blogs.show');


Route::get('/kokoma', [HomeController::class, 'typo']);
