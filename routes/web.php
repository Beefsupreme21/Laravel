<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::resource('/users', UserController::class);

Route::post('/user-search', function() {
    return redirect('/users?searchQuery=' . request('searchQuery'));
});

Route::get('/methods', function () {
    // Retrieval
    $users = User::all();
    $firstUser = User::first(); // gets the first record from the 'users' table
    $findOrFailUser = User::findOrFail(5);  // gets a record from the 'users' table where the 'id' column is 5
    $firstUserName = User::first()->pluck('name'); // Retrieve the 'name' column from the first record of the 'users' table
    $firstUserWhere = User::firstWhere('age', 30); // gets first user where the age is 30

    // Filtering
    $filteredUsers = $users->filter(function ($user) {
        return $user->age > 90;
    });
    $latestUsers = User::latest()->take(5)->get();
    $oldestUsers = User::oldest()->take(5)->get();
    $whereUsers = User::where('age', '>', 90)->get();
    $orWhereUsers = User::where('name', 'John')->orWhere('name', 'Steve')->get();
    $whereBetweenUsers = User::whereBetween('email_verified_at', ['2023-01-13 00:00:00', '2023-01-14 23:59:59'])->get();




    // Sorting - used for organizing data in a particular order 
    $users = User::inRandomOrder()->get();
    $users = User::latest()->get();
    $users = User::orderBy('name', 'asc')->get();
    $users = User::orderBy('age', 'desc')->orderBy('name', 'asc')->get(); // sorts by age then by name

    /* sortBy is a method that can be used on a collection of results after they have been retrieved from the database
    orderBy is a method that is used to sort the results of a query before they are retrieved from the database. */
    // $users = User::get();
    // $users = $users->sortBy('name');
    



    // Aggregating - used for calculating statistical information from the data
    $averageAge = User::avg('age');
    $countUsers = User::count();
    $maxUsersAge = User::max('age');
    $minUsersAge = User::min('age');
    $sumUsersAge = User::sum('age');

    $users = User::get();
    $user_emails = User::pluck('email');
    $combined = $users->combine($user_emails);
    dd($combined);




    return view('categories.method', [
        'users' => $users,
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
