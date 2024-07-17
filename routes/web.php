<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/home',[\App\Http\Controllers\ShowsTestsPages::class,'showHomePage']);
Route::get('/login',[\App\Http\Controllers\ShowsTestsPages::class,'showLoginPage']);
Route::get('/infoPage',[\App\Http\Controllers\ShowsTestsPages::class,'showInfoPage']);
Route::get('/cachedData',[\App\Http\Controllers\ShowsTestsPages::class,'showCachedDataPage']);
