<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/routing', function () {
    return view('categories.routing');
});

Route::get('/methods', function () {
    return view('categories.methods');
});

Route::get('/helpers', function () {
    return view('categories.helpers');
});

Route::get('/naming-conventions', function () {
    return view('categories.naming_conventions');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::get('/users/{user}', [UserController::class, 'show']);

