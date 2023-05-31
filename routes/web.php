<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzavakController;

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

Route::get('/api/szavak',[SzavakController::class, 'szavakTemaval']);

Route::get('/szavak',[SzavakController::class,'index']);
Route::post('/szavak',[SzavakController::class,'store']);
Route::put('/szavak/{id}',[SzavakController::class,'update']);
Route::delete('/szavak/{id}',[SzavakController::class,'destroy']);

Route::get('/tema',[TemaController::class,'index']);
Route::post('/tema',[TemaController::class,'store']);
Route::put('/tema/{id}',[TemaController::class,'update']);
Route::delete('/temak/{id}',[TemaController::class,'destroy']);