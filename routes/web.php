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
    return view('welcome');
});

Route::get('/pizzas', function () {

   $pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust','price' => 10],
    ['type' => 'mexican', 'base' => 'crispy crust','price' => 30],
    ['type' => 'american', 'base' => 'flat crust','price' => 25],
    ['type' => 'italian', 'base' => 'beefy crust','price' => 10],
    ['type' => 'pinoy', 'base' => 'normal crust','price' => 50]
   ];

               
    return view('pizzas', ['pizzas' => $pizzas]);
});
