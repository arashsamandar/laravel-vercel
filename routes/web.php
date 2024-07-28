<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {return view('welcome');});

Route::get('/home',[\App\Http\Controllers\ShowsTestsPages::class,'showHomePage']);
Route::get('/login',[\App\Http\Controllers\ShowsTestsPages::class,'showLoginPage']);
Route::get('/infoPage',[\App\Http\Controllers\ShowsTestsPages::class,'showInfoPage']);
Route::get('/cachedData',[\App\Http\Controllers\ShowsTestsPages::class,'showCachedDataPage']);

Route::get('/redis-test', function () {
    try {
        Redis::set('test_key', 'It works!');
        return Redis::get('test_key');
    } catch (\Exception $e) {
        return 'Redis connection failed: ' . $e->getMessage();
    }
});
