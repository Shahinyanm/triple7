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
    'uses' => 'AdminController@index',
    'as' => 'admin'
])->middleware('admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::resource('winnings', 'WinningController');
    Route::resource('forums', 'ForumController');
    Route::resource('topics', 'TopicController');
    Route::resource('posts', 'PostController');
});


    Auth::routes();

    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/home', 'UserController@index')->name('home');

    Route::get('/barev', function(){
       dump(1);
    })->name('barev');

    Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth'], function () {
        Route::get('tricks', 'UserController@tricks')->name('tricks');
        Route::get('winnings', 'UserController@winnings')->name('winnings');
        Route::get('forum', 'UserController@forum')->name('forum');
        Route::get('settings', 'UserController@settings')->name('settings');


        Route::post('update_user', 'UserController@update_user')->name('update_user');



});
