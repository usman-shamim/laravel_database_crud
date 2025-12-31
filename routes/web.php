<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/students');
});

Route::get('/students', [studentController::class, 'index']);
Route::get('/students/store', [studentController::class, 'store']);
Route::get('/students/edit/{id}', [studentController::class, 'edit']);
Route::get('/students/update/{id}', [studentController::class, 'update']);
Route::get('/students/delete/{id}', [studentController::class, 'destroy']);
