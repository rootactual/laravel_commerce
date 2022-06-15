<?php

use Illuminate\Support\Facades\Route;
//Must Use the controller (demo)
use App\Http\Controllers\Demo\DemoController;
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

//Must load the controller (demo)
Route::get('/about', [DemoController::class, '']);

Route::get('/contact', function () {
   return view('contact');
});
