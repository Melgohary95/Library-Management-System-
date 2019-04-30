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
// Authentication Routes..
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function () {
    Route::resources([
        'users' => 'Admin\UsersController',
        'categories' => 'CategoryController',

    
    ]);
    Route::get('/admin/users/activate/{id}', 'Admin\UsersController@activate')->name('users.active');
});
Route::group(['middleware' => 'auth'], function () {

    Route::resources(['books'     => 'BookController',
                    'comments'   => 'CommentController',  
                ]);

});

Route::get('/home', 'HomeController@index')->name('home');


