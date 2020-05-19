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

// Homepage
Route::get('/', 'PageController@home');

// Contact Us
Route::get('/contact','PageController@contact');

// About Us
Route::get('/about','PageController@about');

// Our services
Route::get('/services','PageController@services');

// Our services E-commerce
Route::get('/e-commerce','PageController@commerce');

// Our services - E-commerce - Own Site
Route::get('/own-site','PageController@ownsite');

// Our services - E-commerce - Marketplace
Route::get('/marketplace','PageController@marketplace');

// Our services - E-commerce - Cross boarder
Route::get('/cross-boarder','PageController@crossboarder');

// Our services - Payment solution
Route::get('/payment','PageController@payment');

// Our Insights
Route::get('/insights','PageController@insights');