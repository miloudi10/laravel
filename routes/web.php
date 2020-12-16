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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/page', function () {
//     return 'hello';
// });
// Route::get('/page/page2', function () {
//     return 'hello again';
// });
Route :: get('/page','HomeController@page');
Route :: get('/','HomeController@welcome');
    

