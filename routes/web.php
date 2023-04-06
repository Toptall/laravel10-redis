<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
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
    return view('welcome');
});

Route::get('/test', function () {

    // after : Set the CACHE_DRIVER and SESSION_DRIVER variables to redis in .env file
//    Redis::set('name', 'taylor');
//    print_r(Redis::get('name'));

    Cache::put('name', 'taylor-cache', 600); // 600 seconds = 1 hour
    print_r(Cache::get('name'));
});
