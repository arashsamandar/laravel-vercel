<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\UsersController::class)->group(function () {
    Route::get('/user/{id}','getUsers_by_id');
});
Route::controller(App\Http\Controllers\TestController::class)->group(function () {
    Route::get('/infoPage','showInfoPage');
    Route::get('/redis-test','redisTest');
    Route::get('/logging','showLogs');
    Route::get('/checkContainer','checkingMyServiceAndProvider');
});
Route::controller(App\Http\Controllers\ShowsTestsPages::class)->group(function () {
    Route::get('/','showHomePage');
    Route::get('/home','showHomePage');
    Route::get('/login','showLoginPage');
    Route::get('/cachedData','showCachedDataPage');
});
