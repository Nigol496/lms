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
    // Authenticating Routes
    Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('auth/login', 'Auth\LoginController@login');
    Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    //Registering Users
    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('auth/register', 'Auth\RegisterController@register');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');

	Route::resource('categories','CategoryController',['except' => ['create']]);
	Route::resource('tags','TagController',['except' => ['create']]);

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('/','PagesController@getIndex');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('about', 'PagesController@getAbout');
	Route::get('contact', 'PagesController@getContact');
	Route::resource('posts', 'PostController');
	// Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
