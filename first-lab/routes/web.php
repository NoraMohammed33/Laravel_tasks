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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\itiController;

// Route::get('posts', [itiController::class, 'get_posts']);

// Route::get('iti', [itiController::class, 'add_post']);

Route::get("/iti/create", [itiController::class, 'create'])->name('iti.createPost');
Route::get('/iti', [itiController::class, 'index']);
Route::get('/iti/{id}', [itiController::class, 'show'])->name('iti.show');
Route::post("/iti", [itiController::class, 'save']);
Route::get('/iti/{id}/destroy', [itiController::class, 'destroy'])->name('iti.destroy');

