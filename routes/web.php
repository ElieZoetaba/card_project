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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'LoginController@showLoginForm')->name('login');
// Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'RegisterController@register');
Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
