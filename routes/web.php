<?php

Route::get('','StaticPagesController@home')->name('home');
Route::get('help','StaticPagesController@help')->name('help');
Route::get('about','StaticPagesController@about')->name('about');

Route::resource('users','UsersController');
Route::get('users/create/confirm/{token}','UsersController@confirmEmail')->name('confirm_email');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destroy')->name('logout');

Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.update');
