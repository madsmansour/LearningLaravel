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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $contacts = [
        'Number: +45 12 34 56 78',
        'Mail: test@laravel.com',
        'Facebook: www.facebook.com/test',
        'blabla'
    ];


    return view('contact',[
        'contacts' => $contacts,
        'title' => request('title')
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
