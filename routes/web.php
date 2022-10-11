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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jokko1', function () {
    return view('step1');
});
Route::get('/jokko2', function () {
    return view('step2');
});
Route::get('/jokko3', function () {
    return view('step3');
});
Route::get('/jokko4', function () {
    return view('step4');
});
Route::get('/jokko5', function () {
    return view('step5');
});
Route::get('/jokko6', function () {
    return view('step6');
});
