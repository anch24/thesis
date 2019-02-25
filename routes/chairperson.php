<?php

Route::group(['namespace' => 'Chairperson'], function() {
    Route::get('/', 'HomeController@index')->name('chairperson.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('chairperson.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('chairperson.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('chairperson.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('chairperson.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('chairperson.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('chairperson.password.reset');

});