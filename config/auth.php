<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        

        'admin' => [
            'driver'   => 'session',
            'provider' => 'admins',
        ],

        'staff' => [
            'driver'   => 'session',
            'provider' => 'staff',
        ],

        'instructor' => [
            'driver'   => 'session',
            'provider' => 'instructors',
        ],

        'chairperson' => [
            'driver'   => 'session',
            'provider' => 'chairpeople',
        ],

        'student' => [
            'driver'   => 'session',
            'provider' => 'students',
        ],

        

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        /*
        'chairperson' => [
            'driver' => 'session',
            'provider' => 'chairpersons',
        ],

        'instructor' => [
            'driver' => 'session',
            'provider' => 'instructors',
        ],

        'staff' => [
            'driver' => 'session',
            'provider' => 'staffs',
        ],

        
        */
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        

        'admins' => [
            'driver' => 'eloquent',
            'model'  => App\Admin::class,
        ],

        'staff' => [
            'driver' => 'eloquent',
            'model'  => App\Staff::class,
        ],

        'instructors' => [
            'driver' => 'eloquent',
            'model'  => App\Instructor::class,
        ],

        'chairpeople' => [
            'driver' => 'eloquent',
            'model'  => App\Chairperson::class,
        ],

        'students' => [
            'driver' => 'eloquent',
            'model'  => App\Student::class,
        ],

        

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        

        'admins' => [
            'provider' => 'admins',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'staff' => [
            'provider' => 'staff',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'instructors' => [
            'provider' => 'instructors',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'chairpeople' => [
            'provider' => 'chairpeople',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'students' => [
            'provider' => 'students',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'students' => [
            'provider' => 'students',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
