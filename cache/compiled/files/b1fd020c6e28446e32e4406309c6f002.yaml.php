<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/resize-images/blueprints.yaml',
    'modified' => 1517507908,
    'data' => [
        'name' => 'Resize Images',
        'version' => '0.2.2',
        'description' => 'Generate responsive versions of images as they are uploaded',
        'icon' => 'picture-o',
        'author' => [
            'name' => 'Fredrik Ekelund',
            'email' => 'fredrik@fredrik.computer'
        ],
        'homepage' => 'https://github.com/fredrikekelund/grav-plugin-resize-images',
        'keywords' => 'images, responsive, srcset',
        'bugs' => 'https://github.com/fredrikekelund/grav-plugin-resize-images/issues',
        'docs' => 'https://github.com/fredrikekelund/grav-plugin-resize-images/blob/develop/README.md',
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
                'adapter' => [
                    'type' => 'select',
                    'label' => 'Image editing module',
                    'help' => 'Imagick will produce better results, but isn\'t available in all environments',
                    'default' => 'imagick',
                    'options' => [
                        'imagick' => 'Imagick',
                        'gd' => 'GD'
                    ]
                ],
                'remove_original' => [
                    'type' => 'toggle',
                    'label' => 'Remove original after resizing',
                    'help' => 'By default, the original image will be preserved as the largest variant. Enable this to remove it instead.',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'sizes' => [
                    'type' => 'list',
                    'label' => 'Image sizes',
                    'btnLabel' => 'Add image size',
                    'fields' => [
                        '.width' => [
                            'type' => 'number',
                            'label' => 'Width',
                            'placeholder' => 1280,
                            'min' => 1
                        ],
                        '.quality' => [
                            'type' => 'number',
                            'label' => 'JPEG quality',
                            'placeholder' => 82,
                            'min' => 0,
                            'max' => 100,
                            'default' => 82
                        ]
                    ]
                ]
            ]
        ]
    ]
];
