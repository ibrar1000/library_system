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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//Route::group([ 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'CheckUserRole']], function() {
//    Route::get('/', 'Admin\NavigationController@dashboard')->name('dashboard');
Route::get('/manage_racks', 'RackController@index')->name('racks');
Route::get('/update_racks', 'RackController@update')->name('update_rack');
Route::get('/manage_books', 'BookController@index')->name('books');
Route::get('/add_book', 'BookController@create')->name('add_book');
Route::get('/delete_book', 'BookController@destroy')->name('delete_book');
Route::post('/store_book', 'BookController@store')->name('store_book');
Route::get('/update_books', 'BookController@update')->name('update_books');
Route::get('/add_books', 'RackController@index')->name('add_books');




Route::get('/user_racks', 'RackController@userIndex')->name('user_racks');
Route::get('/user_books', 'BookController@userIndex')->name('user_books');



//    Route::resource('/categories','Admin\CategoryController');
//    Route::resource('/subcategories','Admin\SubCategoryController');
//    Route::resource('/booking', 'Admin\BookingController');
//    Route::resource('/expertises', 'Admin\ExpertiseController');
//});
