<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/themes/antimatter/blueprints/item.yaml',
    'modified' => 1517928705,
    'data' => [
        'title' => 'Item',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog Item',
                            'fields' => [
                                'header_image' => [
                                    'type' => 'section',
                                    'title' => 'Header Image',
                                    'underline' => true
                                ],
                                'header.header_image' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Header Image',
                                    'help' => 'Enabled displaying of a header image',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'header.header_image_file' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image File',
                                    'help' => 'image filename that exists in the page folder. If not provided, will use the first image found.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.header_image_width' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Width',
                                    'size' => 'small',
                                    'help' => 'Header width in px',
                                    'placeholder' => 'Default is 900',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'header.header_image_height' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Height',
                                    'size' => 'small',
                                    'help' => 'Header height in px',
                                    'placeholder' => 'Default is 300',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'site' => [
                                    'type' => 'text',
                                    'label' => 'Site url'
                                ],
                                'summary' => [
                                    'type' => 'section',
                                    'title' => 'Summary',
                                    'underline' => true
                                ],
                                'header.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Summary',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'header.summary.format' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Format',
                                    'classes' => 'fancy',
                                    'options' => [
                                        'short' => 'Use the first occurence of delimter or size',
                                        'long' => 'Summary delimiter will be ignored'
                                    ]
                                ],
                                'header.summary.size' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Size',
                                    'classes' => 'large',
                                    'placeholder' => 300,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.summary.delimiter' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary delimiter',
                                    'classes' => 'large',
                                    'placeholder' => '==='
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
