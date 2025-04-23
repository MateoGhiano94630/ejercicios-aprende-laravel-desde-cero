<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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

// Ejercicio 1

// GET ROUTE
Route::get('/ejercicio1', function () {
    return "GET OK";
});

// POST ROUTE
Route::post('/ejercicio1', function () {
    return "POST OK";
});

// PUT ROUTE
Route::put('/ejercicio1', function(){
    return "PUT OK";
});

// PATCH ROUTE
Route::patch('/ejercicio1', function(){
    return "PATCH OK";
});

Route::delete('/ejercicio1', function(){
    return "DELETE OK";
});

