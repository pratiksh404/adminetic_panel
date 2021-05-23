<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application Information
    |--------------------------------------------------------------------------
    |
    */
    'title' => env('APP_NAME', 'Adminetic'),
    'prefix' => 'Admine',
    'suffix' => 'tic',
    'logo' => '',
    'favicon' => 'static/favicon.png',
    'description' => 'Laravel Adminetic Admin Panel Upgrade.',

    /*
    |--------------------------------------------------------------------------
    | UI Configuration
    |--------------------------------------------------------------------------
    | 
    */

    // Header
    'mega_menu' => false,
    'level_menu' => false,
    'language_drawer' => false,
    'search' => false,
    'notification' => false,
    'quick_menu' => false,
    'dark_light_toggle' => true,
    'fullscreen_expander' => true,
    'profile' => true,

    /*
    |--------------------------------------------------------------------------
    | Card Setting
    |--------------------------------------------------------------------------
    |
    */
    'card' => '',
    'card_header' => 'b-l-primary border-3',
    'card_action_enabled' => true,
    'card_class' => '',
    'card_body' => 'shadow-lg',
    'card_footer' => '',
    'card_footer_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Dashboard Route Configurations
    |--------------------------------------------------------------------------
    | 
    */
    'prefix' => 'admin',
    'middleware' => ['web', 'auth'],

    /*
    |--------------------------------------------------------------------------
    | Data Settings
    |--------------------------------------------------------------------------
    | 
    */
    'caching' => true,


    // ASSETS DEPENDENCIES INJECTION
    'plugins' => [
        [
            'name' => 'Icons',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/font-awesome.css'
                ],
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/vendors/icofont.css'
                ],
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/vendors/themify.css'
                ],
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/vendors/flag-icon.css'
                ],
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/vendors/feather-icon.css'
                ],
            ]
        ],
        [
            'name' => 'Scrollbar',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'active' => true,
                    'location' => 'assets/css/vendors/scrollbar.css'
                ],
                [
                    'type' => 'js',
                    'active' => true,
                    'location' => 'assets/js/scrollbar/simplebar.js'
                ],
                [
                    'type' => 'js',
                    'active' => true,
                    'location' => 'assets/js/scrollbar/custom.js'
                ],
            ]
        ],
        [
            'name' => 'Notify',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'active' => true,
                    'location' => 'assets/js/notify/bootstrap-notify.min.js'
                ],
            ]
        ],
        [
            'name' => 'Card',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'active' => true,
                    'location' => 'assets/js/custom-card/custom-card.js'
                ],
            ]
        ],
    ],
];