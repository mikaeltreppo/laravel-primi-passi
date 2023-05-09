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



    $saluto = 'hello World!';
    $liguria = 'ligure';
    $sardegna = 'sardo';
    $lombardia = 'lombardo';
    $puglia = 'pugliese';

    $data = [
        'saluto' => $saluto,
        'regioni' => [
            $liguria,
            $lombardia,
            $puglia,
            $sardegna
    
    
    
        ]
    ];
 
    return view('Home', $data);
});