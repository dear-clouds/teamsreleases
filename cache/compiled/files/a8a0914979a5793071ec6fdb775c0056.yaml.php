<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/plugins/login-oauth/blueprints.yaml',
    'modified' => 1517507368,
    'data' => [
        'name' => 'Login Plugin OAuth Addon',
        'version' => '1.4.0',
        'description' => 'Enables login with OAuth accounts. Currently provides Facebook, Google, Twitter, Github, Linkedin',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'login, oauth, social',
        'homepage' => 'https://github.com/getgrav/grav-plugin-login-oauth',
        'bugs' => 'https://github.com/getgrav/grav-plugin-login-oauth/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'login',
                'version' => '>=2.5.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'oauth' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN_OAUTH.OAUTH_SECTION',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_ENABLE',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN_OAUTH.BUILTIN_CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'help' => 'PLUGIN_LOGIN_OAUTH.BUILTIN_CSS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'providers' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_SECTION',
                            'fields' => [
                                'providers.Facebook' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN_OAUTH.FACEBOOK',
                                    'fields' => [
                                        'providers.Facebook.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_FACEBOOK',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.Facebook.credentials.key' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.Facebook.credentials.secret' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'providers.Google' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN_OAUTH.GOOGLE',
                                    'fields' => [
                                        'providers.Google.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_GOOGLE',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.Google.credentials.key' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.Google.credentials.secret' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.Google.whitelist' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.WHITELIST',
                                            'value_only' => true
                                        ],
                                        'providers.Google.blacklist' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.BLACKLIST',
                                            'value_only' => true
                                        ]
                                    ]
                                ],
                                'providers.GitHub' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN_OAUTH.GITHUB',
                                    'fields' => [
                                        'providers.GitHub.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_GITHUB',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.GitHub.credentials.key' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.GitHub.credentials.secret' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'providers.Twitter' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN_OAUTH.TWITTER',
                                    'fields' => [
                                        'providers.Twitter.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_TWITTER',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.Twitter.credentials.key' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.Twitter.credentials.secret' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'providers.Linkedin' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN_OAUTH.LINKEDIN',
                                    'fields' => [
                                        'providers.Linkedin.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_PROVIDER_LINKEDIN',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.Linkedin.credentials.key' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.Linkedin.credentials.secret' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
