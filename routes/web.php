<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);
Auth::routes();//*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix'=>'admin'], function (){
    Route::group(['namespace' => 'Book'], function (){
        Route::get('/book', 'IndexController')->name('admin.book.index');
        Route::get('/book/create', 'CreateController')->name('admin.book.create');
        Route::post('/book', 'StoreController')->name('admin.book.store');
        Route::get('/book/recycle', 'RecycleController')->name('admin.book.recycle');

        Route::get('/book/{book}/edit', 'EditController')->name('admin.book.edit');
        Route::get('/book/{book}', 'ShowController')->name('admin.book.show');
        Route::patch('/book/{book}', 'UpdateController')->name('admin.book.update');

        Route::post('/book/recycle', 'RestoreController')->name('admin.book.restore');
        Route::post('/book/recycle/{book}', 'RestoreOneController')->name('admin.book.restoreone');
        Route::post('/book/{book}', 'RentController')->name('admin.book.rent');
        Route::delete('/book/{book}', 'DestroyController')->name('admin.book.delete');
    });
    Route::group(['namespace' => 'Category'], function () {
        Route::get('/category', 'IndexController')->name('admin.category.index');
        Route::get('/category/create', 'CreateController')->name('admin.category.create');
        Route::post('/category', 'StoreController')->name('admin.category.store');
        Route::get('/category/recycle', 'RecycleController')->name('admin.category.recycle');

        Route::get('/category/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::get('/category/{category}', 'ShowController')->name('admin.category.show');
        Route::patch('/category/{category}', 'UpdateController')->name('admin.category.update');

        Route::post('/category/recycle', 'RestoreController')->name('admin.category.restore');
        Route::post('/category/recycle/{category}', 'RestoreOneController')->name('admin.category.restoreone');
        Route::delete('/category/{category}', 'DestroyController')->name('admin.category.delete');
    });
});
