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

Route::get('/index', function () {
    return view('user.index');
})->name('user.index');
//route for serch 
Route::get('/recherch', function () {
    return view('user.recherch');
})->name('user.recherch');

Auth::routes();




Route::get('/', function () {
    return view('users.index');
})->name('users.index');
Route::get('/serch', function () {
    return view('users.serch');
})->name('users.serch');
//route Condition_de_donation
Route::get('/condition_de_donation', function () {
    return view('users.condition_de_donation');
})->name('users.condition_de_donation');

//route Contact
Route::get('/contact', function () {
    return view('users.contact');
})->name('users.contact');
// route login

Route::get('/login', function () {
    return view('users.login');
})->name('users.login');

//route register
Route::get('/register', function () {
    return view('users.register');
})->name('users.register');

// route forgot-password

Route::get('/fpassword', function () {
    return view('users.forgot-password');
})->name('users.fp');



// Route Admin


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'TestController@index')->name('index');
Route::get('/c', function () {
    return view('users.forgot-password');
})->name('users.fp');