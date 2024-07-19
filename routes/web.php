<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

Route::get('/',[TaskController::class,'tasklist']);
Route::get('/create', [TaskController::class, 'createTask']);
Route::post('/save', [TaskController::class, 'saveTask']);