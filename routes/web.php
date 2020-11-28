<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

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

// Route::get('/', function () {
//     return view('layouts.pages');
// });

Route::get('/', 'PagesController@pages')->name('pages');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/entrepreneurship', 'PagesController@entrepreneurship')->name('entrepreneurship');

Route::get('/global', 'PagesController@global')->name('global');

Route::get('/brand', 'PagesController@brand')->name('brand');


Route::get('/registration', 'PagesController@registration')->name('registration');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/event', 'PagesController@event')->name('event');