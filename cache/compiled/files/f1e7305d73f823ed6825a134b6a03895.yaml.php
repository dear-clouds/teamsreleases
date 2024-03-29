<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/admin-addon-user-manager/blueprints.yaml',
    'modified' => 1518103941,
    'data' => [
        'name' => 'Admin Addon User Manager',
        'version' => '2.0.2',
        'description' => 'A simple admin panel extension which adds the option to manage users and groups',
        'icon' => 'plug',
        'author' => [
            'name' => 'Dávid Szabó',
            'email' => 'david.szabo97@gmail.com'
        ],
        'homepage' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager',
        'keywords' => 'grav, plugin, admin, media',
        'bugs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/issues',
        'docs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'default_list_style' => [
                    'label' => 'Default list style',
                    'type' => 'select',
                    'options' => [
                        'grid' => 'Grid',
                        'list' => 'List'
                    ]
                ],
                'pagination.per_page' => [
                    'label' => 'Users per page',
                    'type' => 'select',
                    'options' => [
                        10 => 10,
                        20 => 20,
                        30 => 30,
                        40 => 40,
                        50 => 50,
                        60 => 60,
                        70 => 70,
                        80 => 80,
                        90 => 90,
                        100 => 100
                    ]
                ],
                'custom_permissions' => [
                    'label' => 'Custom permissions',
                    'type' => 'array',
                    'placeholder_value' => 'Permission (e.g. \'site.login\')',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
