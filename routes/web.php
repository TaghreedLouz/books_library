<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::get('/w',  function () {
                      return view('w');
                  });

Route::get('/admin/lastBooks',  'Admin\BookController@lastBooks');
Route::get('/admin/allUserBooks',  'Admin\BookController@allUserBooks');


Route::post('/admin/allUserBooks/buyBook',  'Admin\BookController@buyBook')->name('book.purchased.buyBook');



Route::get('/search', 'BookController@search')->name('search');


Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/index/about', function () {
    return view('admin.about');
});

Route::get('/index/contact', function () {
    return view('admin.contactus');
});

Route::middleware(['auth', 'auth.admin'])->prefix('admin/')->as('admin.')->group(
    function () {

        //عرض الكتب
        Route::get('allbooks', 'Admin\BookController@index');
        //عرض المستخدم والكتب التي اشتراها
        Route::get('customersBooks', 'Admin\BookController@customersBooks');
        //عرض الفورم فقط لانشاء كتاب
        Route::get('create', 'Admin\BookController@create');
        //ارسال البيانات في الفورم من action ,تخزين الكتاب.
        Route::post('book/store', 'Admin\BookController@store')->name('books.store');
        //حذف الكتاب
        Route::delete('book/{book}', 'Admin\BookController@destroy')->name('books.delete');
        //عرض صفحة تعديل الكتب
        Route::get('book/edit/{book}', 'Admin\BookController@edit')->name('books.edit');
        //تعديل البيانات
        Route::put('book/update/{book}', 'Admin\BookController@update')->name('books.update');

        Route::get('categories/index', 'Admin\CategoryController@index');
    }
);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
