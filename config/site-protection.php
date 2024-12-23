<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Passwords For Laravel Site Protection
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'passwords' => env('SITE_PROTECTION_PASSWORDS'),

    /*
    |--------------------------------------------------------------------------
    | Except certain paths
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'except_paths' => env('SITE_PROTECTION_EXCEPT_PATHS'),

    /*
    |--------------------------------------------------------------------------
    | Protect only specific paths
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'protected_only_paths' => env('SITE_PROTECTION_PROTECTED_ONLY_PATHS'),

    /*
    |--------------------------------------------------------------------------
    | Simple path to a CSS file
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'css_file_uri' => env('SITE_PROTECTION_CSS_FILE_URI'),

    /*
    |--------------------------------------------------------------------------
    | Cookie lifetime
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'cookie_lifetime' => env('SITE_PROTECTION_COOKIE_LIFETIME', 365 * 24 * 60 * 60),
];
