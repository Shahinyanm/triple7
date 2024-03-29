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




Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
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


        Route::get('refunds', 'Admin\RefundController@index')->name('refunds');
        Route::Put('refunds/approve/{id}', 'Admin\RefundController@approve')->name('refunds.approve');
        Route::Put('refunds/disapprove/{id}', 'Admin\RefundController@disapprove')->name('refunds.disapprove');
        Route::delete('refunds/destroy/{id}', 'Admin\RefundController@destroy')->name('refunds.destroy');


        Route::get('reports', 'Admin\ReportController@index')->name('reports');
        Route::delete('reports/destroy/{id}', 'Admin\ReportController@destroy')->name('reports.destroy');

    });

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


        Route::post('user_win_image_post', 'Ajax\UserController@user_win_image_post');
        Route::post('user_report_wins', 'Ajax\UserController@user_report_wins');
        Route::post('user_activate_trick', 'Ajax\UserController@user_activate_trick');
        Route::post('user_tricks_load', 'Ajax\UserController@user_tricks_load');
        Route::post('user_trick_refund', 'Ajax\UserController@user_trick_refund');

        Route::post('check_refunds', 'Ajax\UserController@check_refunds');
        Route::post('refunds_seen', 'Ajax\UserController@refunds_seen');


    });
});