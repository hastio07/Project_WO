<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('Register');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/LoginAdmin', function () {
    return view('LoginAdmin');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
