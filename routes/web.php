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
    return view('index');
});
Route::get('/over-mij', function () {
    return view('about');
});

//send email
Route::get(
    '/sendContact',
    [
        ContactController::class,
        'sendMail'
    ]
)->name('send-mail');