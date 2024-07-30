<?php

use App\Http\Controllers\ShowsTestsPages;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/home',[ShowsTestsPages::class,'showHomePage']);
Route::get('/login',[ShowsTestsPages::class,'showLoginPage']);
Route::get('/cachedData',[ShowsTestsPages::class,'showCachedDataPage']);

Route::get('/infoPage',[TestController::class,'showInfoPage']);
Route::get('/redis-test',[TestController::class,'redisTest']);
Route::get('/logging',[TestController::class,'showLogs']);


