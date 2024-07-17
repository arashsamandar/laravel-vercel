<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('tests.home');
});

Route::get('/login', function () {
    return view('tests.login');
});

Route::get('/testUser',function (){
    return \App\Models\User::all();
});

Route::get('/testUser2',[\App\Http\Controllers\UsersController::class,'showUsers']);

Route::get('/testUser3',function (){
    return view('tests.showFilePath');
});
