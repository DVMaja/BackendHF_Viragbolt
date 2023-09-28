<?php

use App\Models\Termek;
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

//Alapok
Route::get('/api/termek', [TermekController::class, 'index']);
Route::get('/api/termek/{id}', [TermekController::class, 'show']);
Route::put('/api/termek/{id}', [TermekController::class, 'update']);
Route::post('/api/termek', [TermekController::class, 'store']);
Route::delete('/api/termek/{id}', [TermekController::class, 'destroy']);

//View-ok
Route::get('/termek/new', [TermekController::class, 'newView']);
Route::get('/termek/edit/{id}', [TermekController::class, 'editView']);
Route::get('/termek/list', [TermekController::class, 'listView']);
