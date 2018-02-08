<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/quicksave/blueprints.yaml',
    'modified' => 1518103936,
    'data' => [
        'name' => 'Quick Save',
        'version' => '0.1.3',
        'description' => 'Save your page content without requiring a refresh or scroll reset.',
        'icon' => 'save',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-quick-save-plugin',
        'Xdemo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, scroll, save, ajax, refresh, fast, quick',
        'bugs' => 'https://github.com/flamenco/grav-plugin-quicksave/issues',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-quick-save-plugin',
        'license' => 'MIT',
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
                'clear_dirty' => [
                    'type' => 'toggle',
                    'label' => 'Clear dirty state',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Clears a page\'s dirty state after saving content.  This will prevent the "Changes Detected" dialog from appearing when navigating away from a page after changing the content using the plugin\'s AJAX method.'
                ]
            ]
        ]
    ]
];
