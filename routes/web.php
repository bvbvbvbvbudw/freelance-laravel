<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ThreadController;
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

Auth::routes();

Route::resource('/jobs', JobsController::class);
Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('show');

Route::post('/favorite', [FavoriteController::class, 'addFavorite'])->name('addFavorite');
Route::post('/threads', [ThreadController::class, 'createThread'])->name('createThread');
//Route::post('/create-message/{thread}', [ThreadController::class, 'createMessage'])->name('createMessage');
Route::get('/threads/{id}', [ThreadController::class, 'showThreads']);
Route::post('/threads/{id}/newmessage', [ThreadController::class, 'createMessage'])->name('createMessage');


Route::get('/home', [HomeController::class, 'index'])->name('home');

