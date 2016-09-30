<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses' => 'HomeController@index']);

Route::group(['middleware' => ['auth'], 'prefix' => 'shm-admin'], function () {
  Route::get('/', ['uses' => 'AdminController@index']);
  Route::get('settings', function() {
    return view('admin/settings');
  });
  Route::post('settings', ['uses' => 'AdminController@updateSettings']);

  Route::get('blog', ['uses' => 'AdminController@newPost']);
  Route::post('blog', ['uses' => 'AdminController@storePost']);
  Route::get('blog/edit', ['uses' => 'AdminController@showBlogs']);
  Route::get('blog/edit/{id}', ['uses' => 'AdminController@editBlog']);
  Route::post('blog/edit/{id}', ['uses' => 'AdminController@updateBlog']);

  Route::get('users', ['uses' => 'AdminController@showUsers']);

  Route::patch('users/approve/{id}', ['as' => 'user.verify', 'uses' => 'AdminController@approveUser']);
});

Route::get('home', function () {
  return redirect('shm-admin');
});

Route::get('section/{category}/{blog_url}', ['uses' => 'HomeController@showBlog']);
Route::get('section/{category}', ['uses' => 'HomeController@showBlogCategory']);
Route::get('tagged/{tag}', ['uses' => 'HomeController@blogsWithTags']);


Route::group(['middleware' => ['web']], function() {

// Login Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});
