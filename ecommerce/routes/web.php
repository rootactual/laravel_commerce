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

Route::controller(DemoController::class)->group(function() { // multiple routes put into a group
    Route::get('/about', 'Index')->name('about.page'); // load the "Index" method, with named route
    Route::get('/contact', 'ContactMethod')->name('contact.page'); // load the "Index" method
});

//Must load the controller (demo),


//Route::get('/contact', function () {
//   return view('contact');
//});

