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
Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/login', 'PagesController@login')->name('login');
Route::post('/psignup', 'UsersController@postSignUp')->name('post.signup');
Route::post('/plogin', 'UsersController@postLogIn')->name('post.login');
Route::get('/logout', 'UsersController@getLogOut')->name('logout');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::post('/ppost', 'PostsController@postPost')->name('post.post');


