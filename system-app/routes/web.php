<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    // return '<h1 style="color:red;">test</h1>';
    return view(
        'Pages/test',
        [
            'title' => 'Laravel'
        ]
    );
});

Route::get('/user', function () {
    return view('user',
    [
        'name' => 'Armando'
    ]
    );
});

Route::get('/admin', function () {
    return view('Users/admin');
});

// Reports
Route::get('/Report/students', function () {
    return view('Report/students');
});