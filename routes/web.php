<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['auth', 'verified'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard', function () {
        view()->share('title', 'Dashboard');
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', 'UserController@index')->name('users.index');

    Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
    Route::patch('/profile', 'ProfileController@update')->name('profile.update');
    Route::delete('/profile', 'ProfileController@destroy')->name('profile.destroy');

    Route::get('services', 'ServiceController@index')->name('services.index');
});

require __DIR__ . '/auth.php';
