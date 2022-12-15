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

    $data = [
        'nameOne' => 'Lorenzo',
        'nameTwo' => 'Marco',
        'nameThree' => 'Caterina'
    ];
    return view('home', ['data' => $data]);
});

Route::get('/about', function () {

    $data = [
        'nameOne' => 'Lorenzo',
        'nameTwo' => 'Marco',
        'nameThree' => 'Caterina'
    ];
    return view('about', ['data' => $data]);
});
