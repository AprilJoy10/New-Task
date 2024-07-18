<?php

use App\Http\TaskControllers\TaskController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/',[TaskController::class,'tasklist']);