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
    $people = ['Angatia', 'Benson', 'Pesh', 'Wanjiku', 'Mugo'];
    $name = "Bantos Ben";
    return view('welcome')->with('name', $name)->with('people', $people);
});
Route::get('/hello', function () {
    return 'Hello, World!';
});