<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::get('/', 'PagesController@index');

Route::get('register', 'AdminController@register');
Route::get('admin' , 'AdminController@admin');
Route::get('admin/dashboard' , 'AdminController@dashboard');
Route::get('forgot-password', 'AdminController@forgotpassword');
Route::get('reset-password', 'AdminController@resetpassword');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

