<?php

return [
    'assetic_configuration' => [
        'debug' => true,
        'buildOnRequest' => true,

        'webPath' => __DIR__ . '/../../../public/assets',
        'basePath' => 'assets',

        'routes' => [
            'home' => [
                '@base_js',
                '@base_css',
            ],
        ],

        'modules' => [
            'application' => [
                'root_path' => __DIR__ . '/../assets',
                'collections' => [
                    'base_css' => [
                        'assets' => [
                            'css/style.css',
                            'css/bootstrap.min.css'
                        ],
                    ],

                    'base_js' => [
                        'assets' => [
                            'js/jquery-3.1.0.min.js',
                            'js/bootstrap.min.js',
                        ]
                    ],

                    'base_images' => [
                        'assets' => [
                            'img/*.png',
                            'img/*.ico',
                        ],
                        'options' => [
                            'move_raw' => true,
                        ]
                    ],
                ],
            ],
        ],
    ],
];