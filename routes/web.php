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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('admin.index');

    Route::resource('users', 'UsersController', ['as' => 'admin']);
    Route::get('users/{id}/destroy', 'UsersController@destroy')->name('admin.users.destroy');

    Route::resource('categories', 'CategoriesController', ['as' => 'admin']);
    Route::get('categories/{id}/destroy', 'CategoriesController@destroy')->name('admin.categories.destroy');

    Route::resource('tags', 'TagsController', ['as' => 'admin']);
    Route::get('tags/{id}/destroy', 'TagsController@destroy')->name('admin.articles.destroy');

    Route::resource('articles', 'ArticlesController', ['as' => 'admin']);
    Route::get('articles/{id}/destroy', 'ArticlesController@destroy')->name('admin.articles.destroy');

});

//Auth::routes();

// Authentication Routes...
Route::get('admin/auth/login', 'Auth\LoginController@showLoginForm')->name('admin.auth.login');
Route::post('admin/auth/login', 'Auth\LoginController@login')->name('admin.auth.login');
Route::get('admin/auth/logout', 'Auth\LoginController@logout')->name('admin.auth.logout');

// Registration Routes...
/*
$this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('admin/register', 'Auth\RegisterController@register');
*/

// Password Reset Routes...
/*
$this->get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('admin/password/reset', 'Auth\ResetPasswordController@reset');
*/

Route::get('/home', 'HomeController@index')->name('home');
