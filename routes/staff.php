<?php

Route::group(['namespace' => 'Staff'], function() {
    Route::get('/', 'HomeController@index')->name('staff.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('staff.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('staff.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('staff.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('staff.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('staff.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('staff.password.reset');

});