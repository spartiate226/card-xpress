<?php

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
Route::resource('Etudiant','etudiantController');

Route::post('email','emailController@store');
Route::get('email','emailController@create');
Route::get('connexion', function () {
    return view('auth\connection');
})->name('connexion');
Route::get('dash', function () {
    return view('layout.dashboard');
});
Route::get('/', function () {
    return view('pages.accueil');
})->name('login');
Route::get('register', function () {
    return view('auth\Inscription');
})->middleware('auth');
Route::post('log','Auth\LoginController@login');
Route::post('register','Auth\SignController@store');

