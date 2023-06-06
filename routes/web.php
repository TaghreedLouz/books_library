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



Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/index/about', function () {
    return view('admin.about');
});

Route::get('/index/contact', function () {
    return view('admin.contactus');
});
Route::get('/admin/books/index', 'Admin\BookController@index');


    //عرض الفورم فقط
    Route::get('admin/create', 'Admin\BookController@create');
    //ارسال البيانات في الفورم من action
    Route::post('posts/store', 'Admin\BookController@store')->name('admin.books.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

