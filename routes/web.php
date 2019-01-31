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
Route::get('admin', [
    'uses' => 'Admin\AdminController@index',
    'as' => 'admin'
])->middleware('admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::resource('winnings', 'Admin\WinningController');
    Route::resource('forums', 'Admin\ForumController');
    Route::resource('topics', 'Admin\TopicController');
    Route::resource('posts', 'Admin\PostController');
    Route::resource('tricks', 'Admin\TrickController');
    Route::resource('users', 'Admin\UserController');
    Route::get('images/{id}', 'Admin\TrickImageController@show')->name('images');
    Route::Delete('destroy/{id}', 'Admin\TrickImageController@destroy')->name('destroy');
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Auth::routes();

    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/home', 'UserController@index')->name('home');

    Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth'], function () {

        Route::resource('forums', 'User\ForumController');
        Route::resource('topics', 'User\TopicController');


        Route::get('tricks', 'UserController@tricks')->name('tricks');
        Route::get('winnings', 'UserController@winnings')->name('winnings');
        Route::get('settings', 'UserController@settings')->name('settings');


        Route::post('update_user', 'UserController@update_user')->name('update_user');
        Route::post('send_message', 'User\PostController@send')->name('send_message');
        Route::post('user/update_apply', 'UserController@update_apply');
        Route::post('user/load_more', 'UserController@loadMore');
        Route::post('user/set_rating', 'UserController@rating');


    });
});