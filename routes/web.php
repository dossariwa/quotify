<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

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
    return Inertia::render('Home');
});

Route::get('/quotes', function () {
    return Inertia::render('Quotes', [
        'time' => now()->toDateTimeString(),
    ]
    );
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::get('/search', function () {
    return Inertia::render('Search');
});

Route::get('/header', function () {
    return Inertia::render('Header');
});

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/signup', function () {
    return Inertia::render('Auth/Signup');
});

Route::post('/signup', function () {
    // validate the request
    $attributes = Request::validate([
        'firstname' => ['required', 'max:255'],
        'lastname' => ['required', 'max:255'],
        'username' => ['required', 'max:255', 'unique:users'],
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'max:255', 'confirmed'],
    ]);
    // create the user
    User::create($attributes);

    // redirect to the home page
    return redirect('/');
});