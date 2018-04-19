<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'Culture\Dashboard\Http\Controllers\HomeController@index')->name('home');

    // Authentication Routes...
    Route::get('login', 'Culture\Dashboard\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Culture\Dashboard\Http\Controllers\Auth\LoginController@login');
    Route::post('logout', 'Culture\Dashboard\Http\Controllers\Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Culture\Dashboard\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Culture\Dashboard\Http\Controllers\Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Culture\Dashboard\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Culture\Dashboard\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Culture\Dashboard\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Culture\Dashboard\Http\Controllers\Auth\ResetPasswordController@reset');
});

Route::get('/', 'Culture\Dashboard\Http\Controllers\HomeController@index')->name('home');
