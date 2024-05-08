<?php

use Illuminate\Support\Facades\Route;

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
    $name = 'Guglielmo';
    $surname = 'Marra';

    return view('home', compact('name', 'surname'));
})->name('home');

Route::get('/chi-siamo', function(){

    $name = 'Boolean';
    $address = 'Viale Cassala 22';
    $city = '20143 Milano';

    return view('about', compact('name', 'address', 'city'));
})->name('about');
