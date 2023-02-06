<?php

use Illuminate\Support\Facades\Route;
require_once '../app/Http/Controllers/ViewController.php';

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
    $config = include_once '../config.php';

    Route::get((rtrim($config["app_url"]).'/'), 'ViewController@viewHome');
    Route::get((rtrim($config["app_url"]).'/home'), 'ViewController@viewHome');
    Route::get((rtrim($config["app_url"]).'/aboutus'), 'ViewController@viewAbout');
    Route::get((rtrim($config["app_url"]).'/services'), 'ViewController@viewServices');
    Route::get((rtrim($config["app_url"]).'/news'), 'ViewController@viewNews');
    Route::get((rtrim($config["app_url"]).'/contactus'), 'ViewController@viewContactUs');