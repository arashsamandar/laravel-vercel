<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return response()->json([
        'status' => 'success',
        'message' => 'hello arash'
    ])->header('Content-Type','application/json');
});

Route::get('/testUser',function (){
    return \App\Models\User::all();
});

Route::get('/testUser2',[\App\Http\Controllers\UsersController::class,'showUsers']);

Route::get('/testUser3',function (){
    return view('tests.showFilePath');
});
