<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/shortcode-ui/blueprints.yaml',
    'modified' => 1517952127,
    'data' => [
        'name' => 'Shortcode UI',
        'version' => '2.2.5',
        'description' => 'This plugin provides several UI shortcodes',
        'icon' => 'code',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-shortcode-ui',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'ui, plugin, tabs',
        'bugs' => 'https://github.com/getgrav/grav-plugin-shortcode-ui/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme.tabs' => [
                    'type' => 'select',
                    'size' => 'small',
                    'classes' => 'fancy',
                    'label' => 'Tabs Theme',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'lite' => 'Lite',
                        'badges' => 'Badges'
                    ]
                ]
            ]
        ]
    ]
];
