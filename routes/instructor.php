<?php

Route::group(['namespace' => 'Instructor'], function() {
    Route::get('/', 'HomeController@index')->name('instructor.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('instructor.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('instructor.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('instructor.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('instructor.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('instructor.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('instructor.password.reset');

});