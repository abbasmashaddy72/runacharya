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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index')->name('homepage');
    Route::get('about_us', 'FrontendController@about_us')->name('about_us');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('service/{data}', 'FrontendController@service_single')->name('service_single');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('blog/{data}', 'FrontendController@blog_single')->name('blog_single');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    Route::get('contact_us', 'FrontendController@contact_us')->name('contact_us');
    Route::get('book_appointment', 'FrontendController@book_appointment')->name('book_appointment');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['web', 'auth', 'verified'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard', function () {
        view()->share('title', 'Dashboard');
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', 'UserController@index')->name('users.index');

    Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
    Route::patch('/profile', 'ProfileController@update')->name('profile.update');
    Route::delete('/profile', 'ProfileController@destroy')->name('profile.destroy');

    Route::get('services', 'ServiceController@index')->name('services.index');

    Route::get('about', 'AboutController@index')->name('about.index');
    Route::post('about-update', 'AboutController@update')->name('about.update');

    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact-update', 'ContactController@update')->name('contact.update');

    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('blogs', 'BlogController@index')->name('blogs.index');

    Route::get('homepage', 'HomepageController@index')->name('homepage.index');
    Route::post('homepage-update', 'HomepageController@update')->name('homepage.update');

    Route::get('contacted-form', 'ContactedFromController@index')->name('contacted-form.index');

    Route::get('booked-appointment-form', 'BookedAppointmentController@index')->name('booked-appointment-form.index');

    Route::get('testimonial', 'TestimonialController@index')->name('testimonials.index');

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');
});

require __DIR__ . '/auth.php';
