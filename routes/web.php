<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});

Route::post('/', [HomeController::class, 'sendEmail'])->name('knowMore.email');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('contact-us', [ContactUsController::class, 'contactUs']);

Route::post('contact-us', [ContactUsController::class, 'sendEmail'])->name('send.email');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/email', function() {
    return view('emailTemplate');
});
