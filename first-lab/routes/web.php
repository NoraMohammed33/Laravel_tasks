<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itiController;

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


Route::get('/',[itiController::class, 'home'])->name('iti.home');

// Route::get('posts', [itiController::class, 'get_posts']);

// Route::get('iti', [itiController::class, 'add_post']);

Route::get("/iti/create", [itiController::class, 'create'])->name('iti.createPost');
Route::get('/iti', [itiController::class, 'index'])->name('iti.index');
Route::get('/iti/{id}', [itiController::class, 'show'])->name('iti.show');

Route::get('/iti/{postedby}', [itiController::class, 'show_userPosts'])->name('iti.showUser');

Route::post("/iti", [itiController::class, 'save']);

Route::put("/iti/{id}/update", [itiController::class, 'update'])->name('iti.update');
Route::get('/iti/{id}/edit', [itiController::class, 'editpost'])->name('iti.edit');
Route::delete('/iti/{id}/destroy', [itiController::class, 'destroy'])->name('iti.destroy');
Route::get('/users', [itiController::class, 'getuser']);


