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

Route::get('/', function () {
    echo "Selamat Datang";
    });

    Route::get('/about', function () {
        echo "NIM : 2041720042 ";
        echo "Nama : Meilina Anggraeni Putri ";
        echo "Kelas : TI 2D";
    });

    Route::get('/articles/{id}', function ($id) {
        echo "Ini Merupakan Halaman Artikel dengan ID " . $id;
    });
