<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::resource('/users', UserController::class);



Route::get('/methods', function () {
    $users = User::all();

    // $filteredUsers = $users->filter(function ($user) {
    //     return $user->age < 15;
    // });

    $filteredUsers = User::where('age', '>', 96)->get();

    // $whereInUsers = User::whereIn('age', ['20', '25'])->get();
    
    $whereBetweenUsers = User::whereBetween('email_verified_at', ['2023-01-13 00:00:00', '2023-01-14 23:59:59'])->get();

    $whereUsers = User::where('name', 'John')->orWhere('name', 'Steve')->get();

    $latestUsers = User::latest()->take(5)->get();
    $oldestUsers = User::oldest()->take(5)->get();

    return view('categories.method', [
        'users' => $users,
        'filteredUsers' => $filteredUsers,
        'whereBetweenUsers' => $whereBetweenUsers,
        'whereUsers' => $whereUsers,
        'latestUsers' => $latestUsers,
        'oldestUsers' => $oldestUsers,
    ]);
});



Route::get('/routing', function () {
    return view('categories.routing');
});

Route::get('/model', function () {
    return view('categories.model');
});

Route::get('/controller', function () {
    return view('categories.controller');
});



Route::get('/helpers', function () {
    return view('categories.helper');
});

Route::get('/naming-conventions', function () {
    return view('categories.naming_conventions');
});
