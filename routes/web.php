<?php

use App\Http\Controllers\ShowsTestsPages;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/',[ShowsTestsPages::class,'showHomePage']);

Route::get('/home',[ShowsTestsPages::class,'showHomePage']);
Route::get('/login',[ShowsTestsPages::class,'showLoginPage']);
Route::get('/cachedData',[ShowsTestsPages::class,'showCachedDataPage']);

Route::get('/infoPage',[TestController::class,'showInfoPage']);
Route::get('/redis-test',[TestController::class,'redisTest']);
Route::get('/logging',[TestController::class,'showLogs']);

Route::get('/user/{id}',[UsersController::class,'getUsers_by_id']);

