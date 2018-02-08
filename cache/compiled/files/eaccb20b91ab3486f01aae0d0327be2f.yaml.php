<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/tagcloud/blueprints.yaml',
    'modified' => 1517930047,
    'data' => [
        'name' => 'Tagcloud',
        'version' => '1.0.2',
        'description' => 'Create a simple tag cloud',
        'icon' => 'cloud',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/Perlkonig/grav-plugin-tagcloud',
        'demo' => 'http://perlkonig.com',
        'keywords' => 'grav, plugin, tag, tags, cloud, sidebar',
        'bugs' => 'https://github.com/Perlkonig/grav-plugin-tagcloud/issues',
        'readme' => 'https://github.com/Perlkonig/grav-plugin-tagcloud/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'taxonomylist'
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
                'threshold' => [
                    'type' => 'text',
                    'label' => 'Threshold',
                    'help' => 'A number between 0 and 100. The default (0) includes all tags. Any other number will drop tags from the cloud. A value of 100 will only show the most popular tag (or tags, if there are ties). See the documentation for an explanation of how this works. You\'ll have to do some trial and error to figure it out for your specific taxonomy.',
                    'validate' => [
                        'type' => 'int',
                        'min' => 0,
                        'max' => 100
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built-in CSS?',
                    'help' => 'To customize, disable this and refer to the README for instructions.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ]
                ]
            ]
        ]
    ]
];
