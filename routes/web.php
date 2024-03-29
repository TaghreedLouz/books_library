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

// Route::get('/admin/lastBooks',  'Admin\BookController@lastBooks');
// Route::get('/search', 'BookController@search')->name('search');




Route::get('/index/about', function () {
    return view('admin.about');
});

Route::get('/index/contact', function () {
    return view('admin.contactus');
});

//عرض صفحة الاندكس و احدث 3 كتب
Route::get('/index', 'Admin\BookController@indexCustomer')->name('index');
//عرض صفحة كل الكتب و البحث
Route::get('/index/allUserBooks',  'Admin\BookController@allUserBooks')->name('index.allUserBooks.search');
//عرض تفاصيل الكتاب
Route::get('/index/bookDetails/{book}', 'Admin\BookController@bookDetails')->name('index.books.details');


// Route::post('/book/store', 'Admin\BookController@storeBook')->name('book.purchased.store');
Route::middleware(['auth'])->post('/index/buyBook',  'Admin\BookController@buyBook')->name('index.books.buyBook');


Route::middleware(['auth', 'auth.admin'])->prefix('admin/')->as('admin.')->group(
    function () {

        //عرض الكتب
        Route::get('allbooks', 'Admin\BookController@index')->name('allbooks');
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
Route::get('/index/error', function () {
    return view('admin.error');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
