<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/'] ,function () {
    Route::get('/', [UserController::class,'student_login']);
    Route::get('admin', [UserController::class,'admin_login']);
    Route::post('student', [UserController::class, 'student_index'])->name('student');
    Route::post('submit/form', [UserController::class, 'submit']) -> name('submit');
    Route::get('student', [UserController::class, 'page404']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('records', [UserController::class,'admin_index']);
});

Route::get('/logout', [UserController::class, 'logout']);





