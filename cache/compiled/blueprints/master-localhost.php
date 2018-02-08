<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1518104335,
    'checksum' => '0286762b5631313670e6aa15e802378c',
    'files' => [
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1512528472
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1512528472
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1512528472
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1512528472
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1512528472
            ],
            'plugins/admin-addon-user-manager' => [
                'file' => 'user/plugins/admin-addon-user-manager/blueprints.yaml',
                'modified' => 1518103941
            ],
            'plugins/auto-date' => [
                'file' => 'user/plugins/auto-date/blueprints.yaml',
                'modified' => 1517507772
            ],
            'plugins/cascade-filters' => [
                'file' => 'user/plugins/cascade-filters/blueprints.yaml',
                'modified' => 1517948575
            ],
            'plugins/cookieconsent' => [
                'file' => 'user/plugins/cookieconsent/blueprints.yaml',
                'modified' => 1517507460
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1512528472
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1512528472
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1517466221
            ],
            'plugins/frontend-edit-button' => [
                'file' => 'user/plugins/frontend-edit-button/blueprints.yaml',
                'modified' => 1517465433
            ],
            'plugins/jscomments' => [
                'file' => 'user/plugins/jscomments/blueprints.yaml',
                'modified' => 1517465419
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1517507393
            ],
            'plugins/login-oauth' => [
                'file' => 'user/plugins/login-oauth/blueprints.yaml',
                'modified' => 1517507368
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/blueprints.yaml',
                'modified' => 1512528472
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/blueprints.yaml',
                'modified' => 1517507337
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1517508040
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1512528472
            ],
            'plugins/quicksave' => [
                'file' => 'user/plugins/quicksave/blueprints.yaml',
                'modified' => 1518103936
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1517508007
            ],
            'plugins/resize-images' => [
                'file' => 'user/plugins/resize-images/blueprints.yaml',
                'modified' => 1517507908
            ],
            'plugins/shortcode-ui' => [
                'file' => 'user/plugins/shortcode-ui/blueprints.yaml',
                'modified' => 1517952127
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1517949680
            ],
            'plugins/smileys' => [
                'file' => 'user/plugins/smileys/blueprints.yaml',
                'modified' => 1517508084
            ],
            'plugins/star-ratings' => [
                'file' => 'user/plugins/star-ratings/blueprints.yaml',
                'modified' => 1517507695
            ],
            'plugins/tagcloud' => [
                'file' => 'user/plugins/tagcloud/blueprints.yaml',
                'modified' => 1517930047
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1517925767
            ],
            'plugins/tinymce-editor' => [
                'file' => 'user/plugins/tinymce-editor/blueprints.yaml',
                'modified' => 1518104077
            ],
            'plugins/twigfeeds' => [
                'file' => 'user/plugins/twigfeeds/blueprints.yaml',
                'modified' => 1518023426
            ]
        ]
    ],
    'data' => [
        'items' => [
            'media' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'site' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'name' => 'site.title',
                'validation' => 'loose'
            ],
            'site.default_lang' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                'size' => 'x-small',
                'name' => 'site.default_lang',
                'validation' => 'loose'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author',
                'form_field' => false
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'name' => 'site.author.name',
                'validation' => 'loose'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email',
                'validation' => 'loose'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies',
                'validation' => 'loose'
            ],
            'site.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.content',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.summary',
                'validation' => 'loose'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled',
                'validation' => 'loose'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.CHARACTERS',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size',
                'validation' => 'loose'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format',
                'validation' => 'loose'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'name' => 'site.summary.delimiter',
                'validation' => 'loose'
            ],
            'site.metadata' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.metadata',
                'validation' => 'loose'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'name' => 'site.redirects',
                'validation' => 'loose'
            ],
            'site.routes' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.routes',
                'validation' => 'loose'
            ],
            'streams' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose',
                    'hidden' => true
                ]
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes',
                'form_field' => false
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx',
                'validation' => 'loose'
            ],
            'system' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home',
                'form_field' => false
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'show_slug' => true,
                'name' => 'system.home.alias',
                'validation' => 'loose'
            ],
            'system.home.hide_in_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.home.hide_in_urls',
                'validation' => 'loose'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages',
                'form_field' => false
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'name' => 'system.pages.theme',
                'validation' => 'loose'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process',
                'validation' => 'loose'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'data-options@' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone',
                'validation' => 'loose'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat',
                'form_field' => false
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long',
                'validation' => 'loose'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order',
                'form_field' => false
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by',
                'validation' => 'loose'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir',
                'validation' => 'loose'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list',
                'form_field' => false
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PAGES',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count',
                'validation' => 'loose'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates',
                'validation' => 'loose'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events',
                'validation' => 'loose'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'name' => 'system.pages.append_url_extension',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'options' => [
                    301 => '301 - Permanent',
                    302 => '302 - Found',
                    303 => '303 - Other',
                    304 => '304 - Not Modified'
                ],
                'name' => 'system.pages.redirect_default_code',
                'validation' => 'loose'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash',
                'validation' => 'loose'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden',
                'validation' => 'loose'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files',
                'validation' => 'loose'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders',
                'validation' => 'loose'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters',
                'validation' => 'loose'
            ],
            'system.pages.twig_first' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.twig_first',
                'validation' => 'loose'
            ],
            'system.pages.never_cache_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.never_cache_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter' => [
                'type' => '_parent',
                'name' => 'system.pages.frontmatter',
                'form_field' => false
            ],
            'system.pages.frontmatter.process_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.process_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.ignore_fields' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.frontmatter.ignore_fields',
                'validation' => 'loose'
            ],
            'system.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.content',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.languages',
                'validation' => 'loose'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang',
                'validation' => 'loose'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations',
                'validation' => 'loose'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback',
                'validation' => 'loose'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language',
                'validation' => 'loose'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale',
                'validation' => 'loose'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires',
                'validation' => 'loose'
            ],
            'system.pages.cache_control' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_CONTROL',
                'name' => 'system.pages.cache_control',
                'validation' => 'loose'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified',
                'validation' => 'loose'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag',
                'validation' => 'loose'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding',
                'validation' => 'loose'
            ],
            'system.http_headers' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.http_headers',
                'validation' => 'loose'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown',
                'form_field' => false
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup',
                'validation' => 'loose'
            ],
            'system.markdown' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.markdown',
                'validation' => 'loose'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache',
                'form_field' => false
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled',
                'validation' => 'loose'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check',
                'form_field' => false
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'options' => [
                    'file' => 'Markdown + Yaml file timestamps',
                    'folder' => 'Folder timestamps',
                    'hash' => 'All files timestamps',
                    'none' => 'No timestamp checking'
                ],
                'name' => 'system.cache.check.method',
                'validation' => 'loose'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'apcu' => 'APCu',
                    'xcache' => 'Xcache',
                    'memcache' => 'Memcache',
                    'memcached' => 'Memcached',
                    'wincache' => 'WinCache',
                    'redis' => 'Redis'
                ],
                'name' => 'system.cache.driver',
                'validation' => 'loose'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'name' => 'system.cache.prefix',
                'validation' => 'loose'
            ],
            'system.cache.clear_images_by_default' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.clear_images_by_default',
                'validation' => 'loose'
            ],
            'system.cache.cli_compatibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.cli_compatibility',
                'validation' => 'loose'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime',
                'validation' => 'loose'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip',
                'validation' => 'loose'
            ],
            'system.cache.allow_webserver_gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.allow_webserver_gzip',
                'validation' => 'loose'
            ],
            'system.cache.memcache' => [
                'type' => '_parent',
                'name' => 'system.cache.memcache',
                'form_field' => false
            ],
            'system.cache.memcache.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_SERVER',
                'name' => 'system.cache.memcache.server',
                'validation' => 'loose'
            ],
            'system.cache.memcache.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHE_PORT',
                'name' => 'system.cache.memcache.port',
                'validation' => 'loose'
            ],
            'system.cache.memcached' => [
                'type' => '_parent',
                'name' => 'system.cache.memcached',
                'form_field' => false
            ],
            'system.cache.memcached.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                'name' => 'system.cache.memcached.server',
                'validation' => 'loose'
            ],
            'system.cache.memcached.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                'name' => 'system.cache.memcached.port',
                'validation' => 'loose'
            ],
            'system.cache.redis' => [
                'type' => '_parent',
                'name' => 'system.cache.redis',
                'form_field' => false
            ],
            'system.cache.redis.socket' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                'name' => 'system.cache.redis.socket',
                'validation' => 'loose'
            ],
            'system.cache.redis.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                'name' => 'system.cache.redis.server',
                'validation' => 'loose'
            ],
            'system.cache.redis.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                'name' => 'system.cache.redis.port',
                'validation' => 'loose'
            ],
            'system.cache.redis.password' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PASSWORD',
                'name' => 'system.cache.redis.password',
                'validation' => 'loose'
            ],
            'system.caching' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.caching',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.twig',
                'validation' => 'loose'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache',
                'validation' => 'loose'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug',
                'validation' => 'loose'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload',
                'validation' => 'loose'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape',
                'validation' => 'loose'
            ],
            'system.twig.umask_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.umask_fix',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.assets',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify',
                'validation' => 'loose'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows',
                'validation' => 'loose'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp',
                'validation' => 'loose'
            ],
            'system.assets.collections' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'system.assets.collections',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.errors',
                'validation' => 'loose'
            ],
            'system.errors.display' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'size' => 'medium',
                'highlight' => 1,
                'options' => [
                    -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                    0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                    1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                ],
                'name' => 'system.errors.display',
                'validation' => 'loose'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.debugger',
                'validation' => 'loose'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled',
                'validation' => 'loose'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown',
                'form_field' => false
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection',
                'validation' => 'loose'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images',
                'form_field' => false
            ],
            'system.images.default_image_quality' => [
                'type' => 'range',
                'append' => '%',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'validate' => [
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality',
                'validation' => 'loose'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all',
                'validation' => 'loose'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'highlight' => '0755',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms',
                'validation' => 'loose'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug',
                'validation' => 'loose'
            ],
            'system.images.auto_fix_orientation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.auto_fix_orientation',
                'validation' => 'loose'
            ],
            'system.media' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.media',
                'validation' => 'loose'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp',
                'validation' => 'loose'
            ],
            'system.media.auto_metadata_exif' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.auto_metadata_exif',
                'validation' => 'loose'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types',
                'validation' => 'loose'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.session',
                'validation' => 'loose'
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled',
                'validation' => 'loose'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.session.timeout',
                'validation' => 'loose'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'system.session.name',
                'validation' => 'loose'
            ],
            'system.session.secure' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure',
                'validation' => 'loose'
            ],
            'system.session.httponly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.httponly',
                'validation' => 'loose'
            ],
            'system.session.path' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                'name' => 'system.session.path',
                'validation' => 'loose'
            ],
            'system.session.split' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.split',
                'validation' => 'loose'
            ],
            'system.gpm' => [
                'type' => '_parent',
                'name' => 'system.gpm',
                'form_field' => false
            ],
            'system.gpm.releases' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                'highlight' => 'stable',
                'options' => [
                    'stable' => 'PLUGIN_ADMIN.STABLE',
                    'testing' => 'PLUGIN_ADMIN.TESTING'
                ],
                'name' => 'system.gpm.releases',
                'validation' => 'loose'
            ],
            'system.gpm.proxy_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_URL',
                'name' => 'system.gpm.proxy_url',
                'validation' => 'loose'
            ],
            'system.gpm.method' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.AUTO',
                    'fopen' => 'PLUGIN_ADMIN.FOPEN',
                    'curl' => 'PLUGIN_ADMIN.CURL'
                ],
                'name' => 'system.gpm.method',
                'validation' => 'loose'
            ],
            'system.gpm.official_gpm_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                'highlight' => 'auto',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.official_gpm_only',
                'validation' => 'loose'
            ],
            'system.gpm.verify_peer' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_VERIFY_PEER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.verify_peer',
                'validation' => 'loose'
            ],
            'system.reverse_proxy_setup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.reverse_proxy_setup',
                'validation' => 'loose'
            ],
            'system.username_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                'name' => 'system.username_regex',
                'validation' => 'loose'
            ],
            'system.pwd_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                'name' => 'system.pwd_regex',
                'validation' => 'loose'
            ],
            'system.intl_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INTL_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.intl_enabled',
                'validation' => 'loose'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site',
                'validation' => 'loose'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls',
                'validation' => 'loose'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep',
                'validation' => 'loose'
            ],
            'system.force_ssl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_ssl',
                'validation' => 'loose'
            ],
            'system.force_lowercase_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_lowercase_urls',
                'validation' => 'loose'
            ],
            'system.custom_base_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                'name' => 'system.custom_base_url',
                'validation' => 'loose'
            ],
            'system.advanced' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.advanced',
                'validation' => 'loose'
            ],
            'plugins.admin' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins',
                'form_field' => false
            ],
            'plugins.admin.Basics' => [
                'type' => 'section',
                'underline' => false,
                'name' => 'plugins.admin.Basics',
                'validation' => 'loose'
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.cache_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.cache_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.2FA_TITLE',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'Administrator path',
                'size' => 'medium',
                'name' => 'plugins.admin.route',
                'validation' => 'loose'
            ],
            'plugins.admin.logo_text' => [
                'type' => 'text',
                'label' => 'Logo text',
                'size' => 'medium',
                'name' => 'plugins.admin.logo_text',
                'validation' => 'loose'
            ],
            'plugins.admin.content_padding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.content_padding',
                'validation' => 'loose'
            ],
            'plugins.admin.body_classes' => [
                'type' => 'text',
                'label' => 'Body classes',
                'size' => 'medium',
                'name' => 'plugins.admin.body_classes',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar' => [
                'type' => '_parent',
                'name' => 'plugins.admin.sidebar',
                'form_field' => false
            ],
            'plugins.admin.sidebar.activate' => [
                'type' => 'select',
                'label' => 'Sidebar Activation',
                'size' => 'small',
                'default' => 'tab',
                'options' => [
                    'tab' => 'Tab',
                    'hover' => 'Hover'
                ],
                'name' => 'plugins.admin.sidebar.activate',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.hover_delay' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'millseconds',
                'label' => 'Hover delay',
                'default' => 500,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.sidebar.hover_delay',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.size' => [
                'type' => 'select',
                'label' => 'Sidebar Size',
                'size' => 'medium',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Automatic width',
                    'small' => 'Small width'
                ],
                'name' => 'plugins.admin.sidebar.size',
                'validation' => 'loose'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'Theme',
                'default' => 'grav',
                'name' => 'plugins.admin.theme',
                'validation' => 'loose'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'Edit mode',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'Normal',
                    'expert' => 'Expert'
                ],
                'name' => 'plugins.admin.edit_mode',
                'validation' => 'loose'
            ],
            'plugins.admin.frontend_pages_target' => [
                'type' => 'select',
                'label' => 'Open frontend pages in',
                'size' => 'medium',
                'default' => '_blank',
                'options' => [
                    '_blank' => 'New tab',
                    'frontend_tab' => 'Separate tab (always the same)',
                    '_self' => 'Current tab'
                ],
                'name' => 'plugins.admin.frontend_pages_target',
                'validation' => 'loose'
            ],
            'plugins.admin.pages' => [
                'type' => '_parent',
                'name' => 'plugins.admin.pages',
                'form_field' => false
            ],
            'plugins.admin.pages.show_parents' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Parent dropdown',
                'highlight' => 1,
                'options' => [
                    'both' => 'Show slug and folder',
                    'folder' => 'Show folder',
                    'fullpath' => 'Show fullpath'
                ],
                'name' => 'plugins.admin.pages.show_parents',
                'validation' => 'loose'
            ],
            'plugins.admin.google_fonts' => [
                'type' => 'toggle',
                'label' => 'Use Google Fonts',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.google_fonts',
                'validation' => 'loose'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'hidden',
                'name' => 'plugins.admin.show_beta_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.show_github_msg' => [
                'type' => 'toggle',
                'label' => 'Show GitHub Link',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.show_github_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.pages_list_display_field' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Pages List Display Field',
                'name' => 'plugins.admin.pages_list_display_field',
                'validation' => 'loose'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'Automatically check for updates',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enable_auto_updates_check',
                'validation' => 'loose'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session',
                'form_field' => false
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Session Timeout',
                'append' => 'secs',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout',
                'validation' => 'loose'
            ],
            'plugins.admin.warnings' => [
                'type' => '_parent',
                'name' => 'plugins.admin.warnings',
                'form_field' => false
            ],
            'plugins.admin.warnings.delete_page' => [
                'type' => 'toggle',
                'label' => 'Warn on page delete',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.warnings.delete_page',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_page_types' => [
                'type' => 'array',
                'label' => 'Hide page types in Admin',
                'value_only' => true,
                'name' => 'plugins.admin.hide_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_modular_page_types' => [
                'type' => 'array',
                'label' => 'Hide modular page types in Admin',
                'value_only' => true,
                'name' => 'plugins.admin.hide_modular_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.Dashboard' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets' => [
                'type' => '_parent',
                'name' => 'plugins.admin.widgets',
                'form_field' => false
            ],
            'plugins.admin.widgets.dashboard-maintenance' => [
                'type' => 'toggle',
                'label' => 'Maintenance Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-maintenance',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-statistics' => [
                'type' => 'toggle',
                'label' => 'Statistics Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-statistics',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-notifications' => [
                'type' => 'toggle',
                'label' => 'Notifications Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-notifications',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-feed' => [
                'type' => 'toggle',
                'label' => 'News Feed Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-feed',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets.dashboard-pages' => [
                'type' => 'toggle',
                'label' => 'Latest Pages Widget',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.widgets.dashboard-pages',
                'validation' => 'loose'
            ],
            'plugins.admin.Notifications' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Notifications',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications' => [
                'type' => '_parent',
                'name' => 'plugins.admin.notifications',
                'form_field' => false
            ],
            'plugins.admin.notifications.feed' => [
                'type' => 'toggle',
                'label' => 'Feed Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.feed',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.dashboard' => [
                'type' => 'toggle',
                'label' => 'Dashboard Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.plugins' => [
                'type' => 'toggle',
                'label' => 'Plugins Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.plugins',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.themes' => [
                'type' => 'toggle',
                'label' => 'Themes Notifications',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.themes',
                'validation' => 'loose'
            ],
            'plugins.admin.Popularity' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Popularity',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity',
                'form_field' => false
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Visitor tracking',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.popularity.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard',
                'form_field' => false
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'Days of stats',
                'append' => 'days',
                'size' => 'x-small',
                'default' => 7,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'Ignore',
                'size' => 'large',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'name' => 'plugins.admin.popularity.ignore',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history',
                'form_field' => false
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'Daily history',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'Monthly history',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'Visitors history',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors',
                'validation' => 'loose'
            ],
            'plugins.admin-addon-user-manager' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.admin-addon-user-manager.enabled' => [
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
                ],
                'name' => 'plugins.admin-addon-user-manager.enabled',
                'validation' => 'strict'
            ],
            'plugins.admin-addon-user-manager.default_list_style' => [
                'label' => 'Default list style',
                'type' => 'select',
                'options' => [
                    'grid' => 'Grid',
                    'list' => 'List'
                ],
                'name' => 'plugins.admin-addon-user-manager.default_list_style',
                'validation' => 'strict'
            ],
            'plugins.admin-addon-user-manager.pagination' => [
                'type' => '_parent',
                'name' => 'plugins.admin-addon-user-manager.pagination',
                'form_field' => false
            ],
            'plugins.admin-addon-user-manager.pagination.per_page' => [
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
                ],
                'name' => 'plugins.admin-addon-user-manager.pagination.per_page',
                'validation' => 'strict'
            ],
            'plugins.admin-addon-user-manager.custom_permissions' => [
                'label' => 'Custom permissions',
                'type' => 'array',
                'value_only' => true,
                'name' => 'plugins.admin-addon-user-manager.custom_permissions',
                'validation' => 'strict'
            ],
            'plugins.auto-date' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.auto-date.enabled' => [
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
                ],
                'name' => 'plugins.auto-date.enabled',
                'validation' => 'strict'
            ],
            'plugins.cascade-filters' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.cascade-filters.enabled' => [
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
                ],
                'name' => 'plugins.cascade-filters.enabled',
                'validation' => 'strict'
            ],
            'plugins.cascade-filters.select_pages' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_CASCADE_FILTERS.FIELDS_SELECT_PAGES_LABEL',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'multiple' => true,
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.cascade-filters.select_pages',
                'validation' => 'strict'
            ],
            'plugins.cascade-filters.taxonomy_filters' => [
                'type' => 'selectize',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'config-default@' => 'site.taxonomies',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.cascade-filters.taxonomy_filters',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.cookieconsent.enabled' => [
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
                ],
                'name' => 'plugins.cookieconsent.enabled',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.content_message' => [
                'type' => 'text',
                'label' => 'Message',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.content_message',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.content_dismiss' => [
                'type' => 'text',
                'label' => 'Dismiss button text',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.content_dismiss',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.content_link' => [
                'type' => 'text',
                'label' => 'Policy link text',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.content_link',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.content_href' => [
                'type' => 'text',
                'label' => 'Link to policy',
                'validate' => [
                    'type' => 'url'
                ],
                'name' => 'plugins.cookieconsent.content_href',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.popup_background_color' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Banner background',
                'default' => NULL,
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.popup_background_color',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.popup_text_color' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Banner Text',
                'default' => NULL,
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.popup_text_color',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.button_background_color' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Button background',
                'default' => NULL,
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.button_background_color',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.button_text_color' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Button text',
                'default' => NULL,
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.button_text_color',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.button_border_color' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Button boarder',
                'default' => NULL,
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'plugins.cookieconsent.button_border_color',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.position' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Position',
                'default' => 'bottom',
                'options' => [
                    'top' => 'Top',
                    'top-pushdown' => 'Top (Pushdown)',
                    'bottom' => 'Bottom',
                    'bottom-left' => 'Bottom Left',
                    'bottom-right' => 'Bottom Right'
                ],
                'name' => 'plugins.cookieconsent.position',
                'validation' => 'strict'
            ],
            'plugins.cookieconsent.theme' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Layout',
                'default' => 'block',
                'options' => [
                    'block' => 'Block (angled corners)',
                    'classic' => 'Classic (round corners)',
                    'edgeless' => 'Edgeless'
                ],
                'name' => 'plugins.cookieconsent.theme',
                'validation' => 'strict'
            ],
            'plugins.email' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer',
                'form_field' => false
            ],
            'plugins.email.mailer.engine' => [
                'type' => 'select',
                'label' => 'Mail Engine',
                'size' => 'medium',
                'options' => [
                    'none' => 'Disabled',
                    'smtp' => 'SMTP',
                    'sendmail' => 'Sendmail'
                ],
                'name' => 'plugins.email.mailer.engine',
                'validation' => 'loose'
            ],
            'plugins.email.content_type' => [
                'type' => 'select',
                'label' => 'Content type',
                'size' => 'medium',
                'default' => 'text/html',
                'options' => [
                    'text/plain' => 'Plain text',
                    'text/html' => 'HTML'
                ],
                'name' => 'plugins.email.content_type',
                'validation' => 'loose'
            ],
            'plugins.email.charset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Charset',
                'name' => 'plugins.email.charset',
                'validation' => 'loose'
            ],
            'plugins.email.from' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email from',
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.from',
                'validation' => 'loose'
            ],
            'plugins.email.from_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email from name',
                'name' => 'plugins.email.from_name',
                'validation' => 'loose'
            ],
            'plugins.email.to' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email to',
                'multiple' => true,
                'validate' => [
                    'required' => true,
                    'type' => 'email'
                ],
                'name' => 'plugins.email.to',
                'validation' => 'loose'
            ],
            'plugins.email.to_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email to name',
                'name' => 'plugins.email.to_name',
                'validation' => 'loose'
            ],
            'plugins.email.cc' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email CC',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.cc',
                'validation' => 'loose'
            ],
            'plugins.email.cc_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email CC name',
                'name' => 'plugins.email.cc_name',
                'validation' => 'loose'
            ],
            'plugins.email.bcc' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email BCC',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.bcc',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to' => [
                'type' => 'email',
                'size' => 'medium',
                'label' => 'Email reply-to',
                'multiple' => true,
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'plugins.email.reply_to',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to_name' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email reply-to name',
                'name' => 'plugins.email.reply_to_name',
                'validation' => 'loose'
            ],
            'plugins.email.body' => [
                'type' => 'textarea',
                'size' => 'medium',
                'label' => 'Email body',
                'name' => 'plugins.email.body',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp',
                'form_field' => false
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP server',
                'name' => 'plugins.email.mailer.smtp.server',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'SMTP port',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'SMTP encryption',
                'options' => [
                    'none' => 'None',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP login name',
                'name' => 'plugins.email.mailer.smtp.user',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'password',
                'size' => 'medium',
                'label' => 'SMTP password',
                'name' => 'plugins.email.mailer.smtp.password',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail',
                'form_field' => false
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Path to sendmail',
                'name' => 'plugins.email.mailer.sendmail.bin',
                'validation' => 'loose'
            ],
            'plugins.email.debug' => [
                'type' => 'toggle',
                'label' => 'Debug',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.debug',
                'validation' => 'loose'
            ],
            'plugins.error' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled',
                'validation' => 'strict'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes',
                'form_field' => false
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404',
                'validation' => 'strict'
            ],
            'plugins.form' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled',
                'validation' => 'strict'
            ],
            'plugins.form.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form.refresh_prevention' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.refresh_prevention',
                'validation' => 'strict'
            ],
            'plugins.form.general' => [
                'type' => 'section',
                'name' => 'plugins.form.general',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => 'section',
                'name' => 'plugins.form.files',
                'validation' => 'strict'
            ],
            'plugins.form.files.multiple' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.multiple',
                'validation' => 'strict'
            ],
            'plugins.form.files.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_FORM.LIMIT',
                'default' => 10,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.form.files.limit',
                'validation' => 'strict'
            ],
            'plugins.form.files.destination' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.DESTINATION',
                'default' => '@self',
                'name' => 'plugins.form.files.destination',
                'validation' => 'strict'
            ],
            'plugins.form.files.accept' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.ACCEPT',
                'classes' => 'fancy',
                'default' => [
                    0 => 'image/*'
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.files.accept',
                'validation' => 'strict'
            ],
            'plugins.form.files.filesize' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.FILESIZE',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.form.files.filesize',
                'validation' => 'strict'
            ],
            'plugins.form.files.avoid_overwriting' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.avoid_overwriting',
                'validation' => 'strict'
            ],
            'plugins.form.files.random_name' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.RANDOM_NAME',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.random_name',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha' => [
                'type' => 'section',
                'name' => 'plugins.form.recaptcha',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.secret_key',
                'validation' => 'strict'
            ],
            'plugins.frontend-edit-button' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.frontend-edit-button.enabled' => [
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
                ],
                'name' => 'plugins.frontend-edit-button.enabled',
                'validation' => 'strict'
            ],
            'plugins.frontend-edit-button.position' => [
                'type' => 'select',
                'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.POSITION_LABEL',
                'size' => 'medium',
                'highlight' => 'tr',
                'options' => [
                    'tl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_LEFT',
                    'tr' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_RIGHT',
                    'bl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_LEFT',
                    'br' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_RIGHT'
                ],
                'name' => 'plugins.frontend-edit-button.position',
                'validation' => 'strict'
            ],
            'plugins.frontend-edit-button.showLabel' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.frontend-edit-button.showLabel',
                'validation' => 'strict'
            ],
            'plugins.frontend-edit-button.showIcon' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_ICON',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.frontend-edit-button.showIcon',
                'validation' => 'strict'
            ],
            'plugins.jscomments' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.jscomments.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.active' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.active',
                'validation' => 'strict'
            ],
            'plugins.jscomments.provider' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.TITLE',
                'data-options@' => '\\Grav\\Plugin\\JSCommentsPlugin::getProviders',
                'options' => [
                    '' => 'PLUGINS.JS_COMMENTS.NONE_SELECTED'
                ],
                'default' => '',
                'validate' => [
                    'required' => true,
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.provider',
                'validation' => 'strict'
            ],
            'plugins.jscomments.jscomments' => [
                'type' => 'tab',
                'name' => 'plugins.jscomments.jscomments',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers',
                'form_field' => false
            ],
            'plugins.jscomments.providers.discourse' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.discourse',
                'form_field' => false
            ],
            'plugins.jscomments.providers.discourse.host' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.FIELDS.HOST',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.discourse.host',
                'validation' => 'strict'
            ],
            'plugins.jscomments.discourse' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.discourse',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.disqus',
                'form_field' => false
            ],
            'plugins.jscomments.providers.disqus.shortname' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.SHORTNAME',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.disqus.shortname',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus.show_count' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.COUNT',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.disqus.show_count',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.disqus.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.disqus.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.disqus' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.disqus',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.facebook',
                'form_field' => false
            ],
            'plugins.jscomments.providers.facebook.app_id' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.APPID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.app_id',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.num_posts' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS_APPEND',
                'validate' => [
                    'type' => 'int',
                    'min' => 1
                ],
                'name' => 'plugins.jscomments.providers.facebook.num_posts',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.colorscheme' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.TITLE',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.LIGHT',
                    'dark' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.DARK'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.colorscheme',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.order_by' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.TITLE',
                'default' => 'social',
                'options' => [
                    'social' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.SOCIAL',
                    'reverse_time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.REVERSE_TIME',
                    'time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.TIME'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.order_by',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.language' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.LANGUAGE',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.facebook.width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.WIDTH',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.facebook.width',
                'validation' => 'strict'
            ],
            'plugins.jscomments.facebook' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.facebook',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.googleplus',
                'form_field' => false
            ],
            'plugins.jscomments.providers.googleplus.show_count' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.COUNT',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.show_count',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.googleplus.width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.WIDTH',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.googleplus.width',
                'validation' => 'strict'
            ],
            'plugins.jscomments.googleplus' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.googleplus',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.intensedebate' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.intensedebate',
                'form_field' => false
            ],
            'plugins.jscomments.providers.intensedebate.account_number' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.INTENSEDEBATE.FIELDS.ACCOUNT_NUMBER',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.intensedebate.account_number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.intensedebate' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.intensedebate',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.host' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.HOST',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.host',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.builtin_css' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.builtin_css',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.language' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.DEFAULT_LANGUAGE',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.reply_to_self' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REPLY_TO_SELF',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.reply_to_self',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.require' => [
                'type' => 'checkboxes',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.LABEL',
                'options' => [
                    'author' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.AUTHOR',
                    'email' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.EMAIL'
                ],
                'default' => [
                    'author' => true,
                    'email' => true
                ],
                'use' => 'keys',
                'name' => 'plugins.jscomments.providers.isso.require',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.comments',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.comments.number' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NUMBER_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 10,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments.nested_number' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NESTED_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 5,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.nested_number',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.comments.reveal' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.REVEAL_LABEL',
                'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                'default' => 5,
                'validate' => [
                    'min' => -1
                ],
                'name' => 'plugins.jscomments.providers.isso.comments.reveal',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.avatar',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.avatar.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.LABEL',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.avatar.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar.background' => [
                'type' => 'colorpicker',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.BG_COLOR',
                'default' => '',
                'name' => 'plugins.jscomments.providers.isso.avatar.background',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.avatar.foreground' => [
                'type' => 'colorpicker',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.FG_COLOR',
                'default' => '',
                'name' => 'plugins.jscomments.providers.isso.avatar.foreground',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.vote' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.isso.vote',
                'form_field' => false
            ],
            'plugins.jscomments.providers.isso.vote.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LABEL',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.isso.vote.enabled',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.isso.vote.levels' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_LABEL',
                'description' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_DESCRIPTION',
                'default' => '',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.isso.vote.levels',
                'validation' => 'strict'
            ],
            'plugins.jscomments.isso' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.isso',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.muut',
                'form_field' => false
            ],
            'plugins.jscomments.providers.muut.forum' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.FORUM',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.forum',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.channel' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.CHANNEL',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.channel',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.widget' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.WIDGET',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.widget',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.show_online' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_ONLINE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_online',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.show_title' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_TITLE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.show_title',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.upload' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.UPLOAD',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.upload',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.share' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHARE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.jscomments.providers.muut.share',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.muut.language' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.LANGUAGE',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.jscomments.providers.muut.language',
                'validation' => 'strict'
            ],
            'plugins.jscomments.muut' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.muut',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.hypercomments' => [
                'type' => '_parent',
                'name' => 'plugins.jscomments.providers.hypercomments',
                'form_field' => false
            ],
            'plugins.jscomments.providers.hypercomments.widget_id' => [
                'type' => 'text',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.WIDGET_ID',
                'size' => 'x-small',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.jscomments.providers.hypercomments.widget_id',
                'validation' => 'strict'
            ],
            'plugins.jscomments.providers.hypercomments.social' => [
                'type' => 'selectize',
                'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.SOCIAL',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.jscomments.providers.hypercomments.social',
                'validation' => 'strict'
            ],
            'plugins.jscomments.hypercomments' => [
                'type' => 'section',
                'name' => 'plugins.jscomments.hypercomments',
                'validation' => 'strict'
            ],
            'plugins.jscomments.params' => [
                'type' => 'tab',
                'name' => 'plugins.jscomments.params',
                'validation' => 'strict'
            ],
            'plugins.jscomments.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.jscomments.tabs',
                'validation' => 'strict'
            ],
            'plugins.login' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE',
                'name' => 'plugins.login.route',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_login' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                'name' => 'plugins.login.redirect_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.route_forgot' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                'name' => 'plugins.login.route_forgot',
                'validation' => 'loose'
            ],
            'plugins.login.route_reset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                'name' => 'plugins.login.route_reset',
                'validation' => 'loose'
            ],
            'plugins.login.route_profile' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                'name' => 'plugins.login.route_profile',
                'validation' => 'loose'
            ],
            'plugins.login.parent_acl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.parent_acl',
                'validation' => 'loose'
            ],
            'plugins.login.dynamic_page_visibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.dynamic_page_visibility',
                'validation' => 'loose'
            ],
            'plugins.login.protect_protected_page_media' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.protect_protected_page_media',
                'validation' => 'loose'
            ],
            'plugins.login.route_activate' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                'name' => 'plugins.login.route_activate',
                'validation' => 'loose'
            ],
            'plugins.login.route_register' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                'name' => 'plugins.login.route_register',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration',
                'form_field' => false
            ],
            'plugins.login.user_registration.redirect_after_registration' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                'name' => 'plugins.login.user_registration.redirect_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_activation' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                'name' => 'plugins.login.user_registration.redirect_after_activation',
                'validation' => 'loose'
            ],
            'plugins.login.routes' => [
                'type' => 'section',
                'name' => 'plugins.login.routes',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme' => [
                'type' => 'section',
                'name' => 'plugins.login.rememberme',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.rememberme.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'default' => 604800,
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.rememberme.timeout',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.login.rememberme.name',
                'validation' => 'loose'
            ],
            'plugins.login.login' => [
                'type' => 'tab',
                'name' => 'plugins.login.login',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.fields' => [
                'type' => 'array',
                'value_only' => true,
                'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                'name' => 'plugins.login.user_registration.fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.default_values' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                'name' => 'plugins.login.user_registration.default_values',
                'validation' => 'loose'
            ],
            'plugins.login.registration_fields' => [
                'type' => 'section',
                'name' => 'plugins.login.registration_fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.groups' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.GROUPS',
                '@data-options' => '\\Grav\\User\\Groups::groups',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.login.user_registration.groups',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.access' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.access',
                'form_field' => false
            ],
            'plugins.login.user_registration.access.site' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                'multiple' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.login.user_registration.access.site',
                'validation' => 'loose'
            ],
            'plugins.login.access_levels' => [
                'type' => 'section',
                'security' => 'admin.super',
                'name' => 'plugins.login.access_levels',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.options',
                'form_field' => false
            ],
            'plugins.login.user_registration.options.validate_password1_and_password2' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.set_user_disabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.set_user_disabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.login_after_registration' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.login_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_activation_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_activation_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_notification_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_notification_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_welcome_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'name' => 'plugins.login.user_registration.options.send_welcome_email',
                'validation' => 'loose'
            ],
            'plugins.login.options' => [
                'type' => 'section',
                'name' => 'plugins.login.options',
                'validation' => 'loose'
            ],
            'plugins.login.registration' => [
                'type' => 'tab',
                'name' => 'plugins.login.registration',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                'append' => 'PLUGIN_LOGIN.RESETS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_pw_resets_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.SECONDS',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_pw_resets_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_login_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.SECONDS',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_login_interval',
                'validation' => 'loose'
            ],
            'plugins.login.Security' => [
                'type' => 'tab',
                'name' => 'plugins.login.Security',
                'validation' => 'loose'
            ],
            'plugins.login.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.login.tabs',
                'validation' => 'loose'
            ],
            'plugins.login-oauth' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.login-oauth.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN_OAUTH.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login-oauth.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.oauth' => [
                'type' => 'tab',
                'name' => 'plugins.login-oauth.oauth',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers' => [
                'type' => 'tab',
                'name' => 'plugins.login-oauth.providers',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Facebook' => [
                'type' => 'section',
                'name' => 'plugins.login-oauth.providers.Facebook',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Facebook.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.providers.Facebook.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Facebook.credentials' => [
                'type' => '_parent',
                'name' => 'plugins.login-oauth.providers.Facebook.credentials',
                'form_field' => false
            ],
            'plugins.login-oauth.providers.Facebook.credentials.key' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Facebook.credentials.key',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Facebook.credentials.secret' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Facebook.credentials.secret',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google' => [
                'type' => 'section',
                'name' => 'plugins.login-oauth.providers.Google',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.providers.Google.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google.credentials' => [
                'type' => '_parent',
                'name' => 'plugins.login-oauth.providers.Google.credentials',
                'form_field' => false
            ],
            'plugins.login-oauth.providers.Google.credentials.key' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Google.credentials.key',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google.credentials.secret' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Google.credentials.secret',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google.whitelist' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN_OAUTH.WHITELIST',
                'value_only' => true,
                'name' => 'plugins.login-oauth.providers.Google.whitelist',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Google.blacklist' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN_OAUTH.BLACKLIST',
                'value_only' => true,
                'name' => 'plugins.login-oauth.providers.Google.blacklist',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.GitHub' => [
                'type' => 'section',
                'name' => 'plugins.login-oauth.providers.GitHub',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.GitHub.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.providers.GitHub.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.GitHub.credentials' => [
                'type' => '_parent',
                'name' => 'plugins.login-oauth.providers.GitHub.credentials',
                'form_field' => false
            ],
            'plugins.login-oauth.providers.GitHub.credentials.key' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.GitHub.credentials.key',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.GitHub.credentials.secret' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.GitHub.credentials.secret',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Twitter' => [
                'type' => 'section',
                'name' => 'plugins.login-oauth.providers.Twitter',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Twitter.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.providers.Twitter.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Twitter.credentials' => [
                'type' => '_parent',
                'name' => 'plugins.login-oauth.providers.Twitter.credentials',
                'form_field' => false
            ],
            'plugins.login-oauth.providers.Twitter.credentials.key' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Twitter.credentials.key',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Twitter.credentials.secret' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Twitter.credentials.secret',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Linkedin' => [
                'type' => 'section',
                'name' => 'plugins.login-oauth.providers.Linkedin',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Linkedin.enabled' => [
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
                ],
                'name' => 'plugins.login-oauth.providers.Linkedin.enabled',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Linkedin.credentials' => [
                'type' => '_parent',
                'name' => 'plugins.login-oauth.providers.Linkedin.credentials',
                'form_field' => false
            ],
            'plugins.login-oauth.providers.Linkedin.credentials.key' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_ID',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Linkedin.credentials.key',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.providers.Linkedin.credentials.secret' => [
                'type' => 'text',
                'label' => 'PLUGIN_LOGIN_OAUTH.OAUTH_CLIENT_SECRET',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.login-oauth.providers.Linkedin.credentials.secret',
                'validation' => 'loose'
            ],
            'plugins.login-oauth.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'plugins.login-oauth.tabs',
                'validation' => 'loose'
            ],
            'plugins.markdown-notices' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.markdown-notices.enabled' => [
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
                ],
                'name' => 'plugins.markdown-notices.enabled',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-notices.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.level_classes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Level classes',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.markdown-notices.level_classes',
                'validation' => 'strict'
            ],
            'plugins.page-inject' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.page-inject.enabled' => [
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
                ],
                'name' => 'plugins.page-inject.enabled',
                'validation' => 'strict'
            ],
            'plugins.page-inject.active' => [
                'type' => 'toggle',
                'label' => 'Activate Site-Wide',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.page-inject.active',
                'validation' => 'strict'
            ],
            'plugins.page-inject.processed_content' => [
                'type' => 'toggle',
                'label' => 'Processed Content',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.page-inject.processed_content',
                'validation' => 'strict'
            ],
            'plugins.pagination' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled',
                'validation' => 'strict'
            ],
            'plugins.pagination.delta' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delta',
                'default' => 0,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta',
                'validation' => 'strict'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.problems' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled',
                'validation' => 'strict'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.quicksave' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.quicksave.enabled' => [
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
                ],
                'name' => 'plugins.quicksave.enabled',
                'validation' => 'strict'
            ],
            'plugins.quicksave.clear_dirty' => [
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
                'name' => 'plugins.quicksave.clear_dirty',
                'validation' => 'strict'
            ],
            'plugins.relatedpages' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.relatedpages.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.enabled',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.basics_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.basics_title',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.LIMIT',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'plugins.relatedpages.limit',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.show_score' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.show_score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.items' => [
                'type' => 'text',
                'yaml' => true,
                'label' => 'PLUGIN_REL_PAGES.ITEMS',
                'default' => '@page: /blog',
                'name' => 'plugins.relatedpages.filter.items',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter.order',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                'default' => 'date',
                'options' => [
                    'folder' => 'Folder',
                    'title' => 'Title',
                    'date' => 'Date',
                    'default' => 'Default'
                ],
                'name' => 'plugins.relatedpages.filter.order.by',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order.dir' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.relatedpages.filter.order.dir',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.page_in_filter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.page_in_filter',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.explicit_pages',
                'form_field' => false
            ],
            'plugins.relatedpages.explicit_pages.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.explicit_pages.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages.score' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.relatedpages.explicit_pages.score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.taxonomy_title',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.content_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.content_title',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.content_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.content_match',
                'form_field' => false
            ],
            'plugins.relatedpages.content_match.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.content_match.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.advanced_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.advanced_title',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale',
                'validation' => 'loose'
            ],
            'plugins.resize-images' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.resize-images.enabled' => [
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
                ],
                'name' => 'plugins.resize-images.enabled',
                'validation' => 'strict'
            ],
            'plugins.resize-images.adapter' => [
                'type' => 'select',
                'label' => 'Image editing module',
                'default' => 'imagick',
                'options' => [
                    'imagick' => 'Imagick',
                    'gd' => 'GD'
                ],
                'name' => 'plugins.resize-images.adapter',
                'validation' => 'strict'
            ],
            'plugins.resize-images.remove_original' => [
                'type' => 'toggle',
                'label' => 'Remove original after resizing',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.resize-images.remove_original',
                'validation' => 'strict'
            ],
            'plugins.resize-images.sizes' => [
                'type' => 'list',
                'label' => 'Image sizes',
                'btnLabel' => 'Add image size',
                'name' => 'plugins.resize-images.sizes',
                'validation' => 'strict'
            ],
            'plugins.resize-images.sizes.width' => [
                'type' => 'number',
                'label' => 'Width',
                'min' => 1,
                'name' => 'plugins.resize-images.sizes.width',
                'validation' => 'strict'
            ],
            'plugins.resize-images.sizes.quality' => [
                'type' => 'number',
                'label' => 'JPEG quality',
                'min' => 0,
                'max' => 100,
                'default' => 82,
                'name' => 'plugins.resize-images.sizes.quality',
                'validation' => 'strict'
            ],
            'plugins.shortcode-ui' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.shortcode-ui.enabled' => [
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
                ],
                'name' => 'plugins.shortcode-ui.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-ui.theme' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-ui.theme',
                'form_field' => false
            ],
            'plugins.shortcode-ui.theme.tabs' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Tabs Theme',
                'default' => 'default',
                'options' => [
                    'default' => 'Default',
                    'lite' => 'Lite',
                    'badges' => 'Badges'
                ],
                'name' => 'plugins.shortcode-ui.theme.tabs',
                'validation' => 'strict'
            ],
            'plugins.simplesearch' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.search_content' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Search Content',
                'default' => 'rendered',
                'options' => [
                    'rendered' => 'Rendered Content (Slower)',
                    'raw' => 'Raw Markdown Content (Faster)'
                ],
                'name' => 'plugins.simplesearch.search_content',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_js' => [
                'type' => 'toggle',
                'label' => 'Use built in JavaScript',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_js',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.display_button' => [
                'type' => 'toggle',
                'label' => 'Display Search Button',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.display_button',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.ignore_accented_characters' => [
                'type' => 'toggle',
                'label' => 'Ignore accented characters',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.ignore_accented_characters',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.min_query_length' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Minimum query length',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.simplesearch.min_query_length',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'name' => 'plugins.simplesearch.route',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Template',
                'default' => 'simplesearch_results',
                'name' => 'plugins.simplesearch.template',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filters' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.filters',
                'form_field' => false
            ],
            'plugins.simplesearch.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters.category',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.order',
                'form_field' => false
            ],
            'plugins.simplesearch.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'plugins.simplesearch.order.by',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'plugins.simplesearch.order.dir',
                'validation' => 'strict'
            ],
            'plugins.smileys' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.smileys.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.SMILEYS.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.smileys.enabled',
                'validation' => 'strict'
            ],
            'plugins.smileys.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.SMILEYS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.smileys.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.smileys.weight' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.SMILEYS.WEIGHT',
                'default' => 1,
                'validate' => [
                    'type' => 'int',
                    'min' => -100,
                    'max' => 100
                ],
                'name' => 'plugins.smileys.weight',
                'validation' => 'strict'
            ],
            'plugins.smileys.global' => [
                'type' => 'section',
                'underline' => 1,
                'name' => 'plugins.smileys.global',
                'validation' => 'strict'
            ],
            'plugins.smileys.pack' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGINS.SMILEYS.PACK',
                '@data-options' => '\\Grav\\Plugin\\SmileysPlugin::getSmileyPacks',
                'default' => '',
                'options' => [
                    '' => 'PLUGINS.SMILEYS.PACK_DEFAULT'
                ],
                'validate' => [
                    'required' => true,
                    'type' => 'string'
                ],
                'name' => 'plugins.smileys.pack',
                'validation' => 'strict'
            ],
            'plugins.smileys.default' => [
                'type' => 'section',
                'underline' => 1,
                'name' => 'plugins.smileys.default',
                'validation' => 'strict'
            ],
            'plugins.smileys.exclude' => [
                'type' => '_parent',
                'name' => 'plugins.smileys.exclude',
                'form_field' => false
            ],
            'plugins.smileys.exclude.tags' => [
                'type' => 'selectize',
                'size' => 'medium',
                'label' => 'PLUGINS.SMILEYS.EXCLUDE.TAGS',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.smileys.exclude.tags',
                'validation' => 'strict'
            ],
            'plugins.smileys.exclude.classes' => [
                'type' => 'selectize',
                'size' => 'medium',
                'label' => 'PLUGINS.SMILEYS.EXCLUDE.CLASSES',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.smileys.exclude.classes',
                'validation' => 'strict'
            ],
            'plugins.smileys.process' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.SMILEYS.PROCESS',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.smileys.process',
                'validation' => 'strict'
            ],
            'plugins.smileys.specific' => [
                'type' => 'section',
                'underline' => 1,
                'name' => 'plugins.smileys.specific',
                'validation' => 'strict'
            ],
            'plugins.star-ratings' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.star-ratings.enabled' => [
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
                ],
                'name' => 'plugins.star-ratings.enabled',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.callback' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Callback URL',
                'name' => 'plugins.star-ratings.callback',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Enable built-in CSS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.vote_access' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Vote Access',
                'name' => 'plugins.star-ratings.vote_access',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.unique_ip_check' => [
                'type' => 'toggle',
                'label' => 'Unique IP Check',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.unique_ip_check',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.initial_stars' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Initial stars',
                'prepend' => '<i class="fa fa-star-o"></i>',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.star-ratings.initial_stars',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.total_stars' => [
                'type' => 'select',
                'size' => 'x-small',
                'label' => 'Total stars',
                'classes' => 'fancy',
                'default' => 5,
                'options' => [
                    3 => '3',
                    4 => '4',
                    5 => '5',
                    6 => '6',
                    7 => '7',
                    8 => '8',
                    9 => '9',
                    10 => '10'
                ],
                'name' => 'plugins.star-ratings.total_stars',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.star_size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Star size',
                'append' => 'px',
                'validate' => [
                    'type' => 'number',
                    'min' => 5
                ],
                'name' => 'plugins.star-ratings.star_size',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.use_full_stars' => [
                'type' => 'toggle',
                'label' => 'Use full stars',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.use_full_stars',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.empty_color' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'Empty color',
                'name' => 'plugins.star-ratings.empty_color',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.hover_color' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'Hover color',
                'name' => 'plugins.star-ratings.hover_color',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.active_color' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'Active color',
                'name' => 'plugins.star-ratings.active_color',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.use_gradient' => [
                'type' => 'toggle',
                'label' => 'Use gradient',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.use_gradient',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.star_gradient_start' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'Start gradient color',
                'name' => 'plugins.star-ratings.star_gradient_start',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.star_gradient_end' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'End gradient color',
                'name' => 'plugins.star-ratings.star_gradient_end',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.star_shape' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'Star shape',
                'classes' => 'fancy',
                'default' => 'straight',
                'options' => [
                    'straight' => 'Straight',
                    'rounded' => 'Rounded'
                ],
                'name' => 'plugins.star-ratings.star_shape',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.stroke_width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Stroke width',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.star-ratings.stroke_width',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.stroke_color' => [
                'type' => 'colorpicker',
                'size' => 'medium',
                'label' => 'End gradient color',
                'name' => 'plugins.star-ratings.stroke_color',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.readonly' => [
                'type' => 'toggle',
                'label' => 'Read-only',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.readonly',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.disable_after_rate' => [
                'type' => 'toggle',
                'label' => 'Disable after rate',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.disable_after_rate',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.show_count' => [
                'type' => 'toggle',
                'label' => 'Show count',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.show_count',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.show_score' => [
                'type' => 'toggle',
                'label' => 'Show score',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.show_score',
                'validation' => 'strict'
            ],
            'plugins.star-ratings.aggregate_rating' => [
                'type' => 'toggle',
                'label' => 'Aggregate Rating',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.star-ratings.aggregate_rating',
                'validation' => 'strict'
            ],
            'plugins.tagcloud' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.tagcloud.enabled' => [
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
                ],
                'name' => 'plugins.tagcloud.enabled',
                'validation' => 'strict'
            ],
            'plugins.tagcloud.threshold' => [
                'type' => 'text',
                'label' => 'Threshold',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.tagcloud.threshold',
                'validation' => 'strict'
            ],
            'plugins.tagcloud.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built-in CSS?',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'name' => 'plugins.tagcloud.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.taxonomylist.enabled' => [
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
                ],
                'name' => 'plugins.taxonomylist.enabled',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.tinymce-editor.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tinymce-editor.enabled',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.apikey' => [
                'type' => 'text',
                'label' => 'PLUGIN_TINYMCE_EDITOR.API_KEY',
                'name' => 'plugins.tinymce-editor.apikey',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.plugins' => [
                'type' => 'selectize',
                'label' => 'PLUGIN_ADMIN.PLUGINS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.tinymce-editor.plugins',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.parameters' => [
                'name' => 'plugins.tinymce-editor.parameters',
                'type' => 'list',
                'style' => 'vertical',
                'collapsible' => 0,
                'label' => 'PLUGIN_TINYMCE_EDITOR.PARAMETERS',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.parameters.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.tinymce-editor.parameters.name',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.parameters.value' => [
                'type' => 'text',
                'label' => 'PLUGIN_TINYMCE_EDITOR.VALUE',
                'name' => 'plugins.tinymce-editor.parameters.value',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.menubar' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_TINYMCE_EDITOR.MENU_BAR',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tinymce-editor.menubar',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.menu' => [
                'name' => 'plugins.tinymce-editor.menu',
                'type' => 'list',
                'style' => 'vertical',
                'collapsible' => 0,
                'label' => 'PLUGIN_ADMIN.MENU',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.menu.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.TITLE',
                'name' => 'plugins.tinymce-editor.menu.title',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.menu.items' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.ITEMS',
                'name' => 'plugins.tinymce-editor.menu.items',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.toolbar' => [
                'name' => 'plugins.tinymce-editor.toolbar',
                'type' => 'list',
                'style' => 'vertical',
                'collapsible' => 0,
                'label' => 'PLUGIN_TINYMCE_EDITOR.TOOLBAR',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.toolbar.row' => [
                'type' => 'text',
                'label' => 'PLUGIN_TINYMCE_EDITOR.ROW',
                'name' => 'plugins.tinymce-editor.toolbar.row',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.branding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_TINYMCE_EDITOR.BRANDING',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tinymce-editor.branding',
                'validation' => 'strict'
            ],
            'plugins.tinymce-editor.statusbar' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_TINYMCE_EDITOR.STATUS_BAR',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tinymce-editor.statusbar',
                'validation' => 'strict'
            ],
            'plugins.twigfeeds' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.twigfeeds.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.enabled',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.cache' => [
                'type' => 'toggle',
                'label' => 'Cache Feeds',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.cache',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.static_cache' => [
                'type' => 'toggle',
                'label' => 'Static Cache',
                'description' => 'Saves feeds in /user/data rather than in /cache.',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.static_cache',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.debug' => [
                'type' => 'toggle',
                'label' => 'Debug',
                'description' => 'Enables Debug-mode, which logs to Grav\'s Debugger and log-file.',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.debug',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.silence_security' => [
                'type' => 'toggle',
                'label' => 'Silence security errors',
                'description' => 'Silently ignores security errors, such as missing certificates.',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.twigfeeds.silence_security',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds' => [
                'name' => 'plugins.twigfeeds.twig_feeds',
                'type' => 'list',
                'array' => true,
                'style' => 'vertical',
                'label' => 'Feeds',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*' => [
                'type' => '_parent',
                'name' => 'plugins.twigfeeds.twig_feeds.*',
                'form_field' => false
            ],
            'plugins.twigfeeds.twig_feeds.*.source' => [
                'type' => 'text',
                'label' => 'Source',
                'description' => 'URL to RSS or Atom feed.',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.source',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.name' => [
                'type' => 'text',
                'label' => 'Name',
                'description' => 'Name of the feed.',
                'name' => 'plugins.twigfeeds.twig_feeds.*.name',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.category' => [
                'type' => 'text',
                'label' => 'Category',
                'description' => 'Pays d\'origine',
                'name' => 'plugins.twigfeeds.twig_feeds.*.category',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.type' => [
                'type' => 'text',
                'label' => 'Type',
                'description' => 'Dramas, Animes, Scantras',
                'name' => 'plugins.twigfeeds.twig_feeds.*.type',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.start' => [
                'type' => 'text',
                'label' => 'Item start',
                'description' => 'Start of feed results. Must be a number between 0 and 500.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 500
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.start',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.end' => [
                'type' => 'text',
                'label' => 'Item end',
                'description' => 'End of feed results. Must be a number between 0 and 500.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 500
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.end',
                'validation' => 'loose'
            ],
            'plugins.twigfeeds.twig_feeds.*.cache_time' => [
                'type' => 'text',
                'label' => 'Cache Time',
                'description' => 'Time, in seconds, to wait before caching data again.',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.twigfeeds.twig_feeds.*.cache_time',
                'validation' => 'loose'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'media' => 'media',
            'site' => [
                'content' => 'site.content',
                'title' => 'site.title',
                'default_lang' => 'site.default_lang',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'routes' => 'site.routes',
                'redirects' => 'site.redirects'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'content' => 'system.content',
                'home' => [
                    'alias' => 'system.home.alias',
                    'hide_in_urls' => 'system.home.hide_in_urls'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'twig_first' => 'system.pages.twig_first',
                    'never_cache_twig' => 'system.pages.never_cache_twig',
                    'frontmatter' => [
                        'process_twig' => 'system.pages.frontmatter.process_twig',
                        'ignore_fields' => 'system.pages.frontmatter.ignore_fields'
                    ],
                    'expires' => 'system.pages.expires',
                    'cache_control' => 'system.pages.cache_control',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'http_headers' => 'system.http_headers',
                'markdown' => 'system.markdown',
                'caching' => 'system.caching',
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'clear_images_by_default' => 'system.cache.clear_images_by_default',
                    'cli_compatibility' => 'system.cache.cli_compatibility',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip',
                    'allow_webserver_gzip' => 'system.cache.allow_webserver_gzip',
                    'memcache' => [
                        'server' => 'system.cache.memcache.server',
                        'port' => 'system.cache.memcache.port'
                    ],
                    'memcached' => [
                        'server' => 'system.cache.memcached.server',
                        'port' => 'system.cache.memcached.port'
                    ],
                    'redis' => [
                        'socket' => 'system.cache.redis.socket',
                        'server' => 'system.cache.redis.server',
                        'port' => 'system.cache.redis.port',
                        'password' => 'system.cache.redis.password'
                    ]
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape',
                    'umask_fix' => 'system.twig.umask_fix'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_pipeline_include_externals' => 'system.assets.css_pipeline_include_externals',
                    'css_pipeline_before_excludes' => 'system.assets.css_pipeline_before_excludes',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_pipeline_include_externals' => 'system.assets.js_pipeline_include_externals',
                    'js_pipeline_before_excludes' => 'system.assets.js_pipeline_before_excludes',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'auto_metadata_exif' => 'system.media.auto_metadata_exif',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug',
                    'auto_fix_orientation' => 'system.images.auto_fix_orientation'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name',
                    'secure' => 'system.session.secure',
                    'httponly' => 'system.session.httponly',
                    'path' => 'system.session.path',
                    'split' => 'system.session.split'
                ],
                'advanced' => 'system.advanced',
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'proxy_url' => 'system.gpm.proxy_url',
                    'method' => 'system.gpm.method',
                    'official_gpm_only' => 'system.gpm.official_gpm_only',
                    'verify_peer' => 'system.gpm.verify_peer'
                ],
                'reverse_proxy_setup' => 'system.reverse_proxy_setup',
                'username_regex' => 'system.username_regex',
                'pwd_regex' => 'system.pwd_regex',
                'intl_enabled' => 'system.intl_enabled',
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep',
                'force_ssl' => 'system.force_ssl',
                'force_lowercase_urls' => 'system.force_lowercase_urls',
                'custom_base_url' => 'system.custom_base_url'
            ],
            'plugins' => [
                'admin' => [
                    'Basics' => 'plugins.admin.Basics',
                    'enabled' => 'plugins.admin.enabled',
                    'cache_enabled' => 'plugins.admin.cache_enabled',
                    'twofa_enabled' => 'plugins.admin.twofa_enabled',
                    'route' => 'plugins.admin.route',
                    'logo_text' => 'plugins.admin.logo_text',
                    'content_padding' => 'plugins.admin.content_padding',
                    'body_classes' => 'plugins.admin.body_classes',
                    'sidebar' => [
                        'activate' => 'plugins.admin.sidebar.activate',
                        'hover_delay' => 'plugins.admin.sidebar.hover_delay',
                        'size' => 'plugins.admin.sidebar.size'
                    ],
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'frontend_pages_target' => 'plugins.admin.frontend_pages_target',
                    'pages' => [
                        'show_parents' => 'plugins.admin.pages.show_parents'
                    ],
                    'google_fonts' => 'plugins.admin.google_fonts',
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'show_github_msg' => 'plugins.admin.show_github_msg',
                    'pages_list_display_field' => 'plugins.admin.pages_list_display_field',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout'
                    ],
                    'warnings' => [
                        'delete_page' => 'plugins.admin.warnings.delete_page'
                    ],
                    'hide_page_types' => 'plugins.admin.hide_page_types',
                    'hide_modular_page_types' => 'plugins.admin.hide_modular_page_types',
                    'Dashboard' => 'plugins.admin.Dashboard',
                    'widgets' => [
                        'dashboard-maintenance' => 'plugins.admin.widgets.dashboard-maintenance',
                        'dashboard-statistics' => 'plugins.admin.widgets.dashboard-statistics',
                        'dashboard-notifications' => 'plugins.admin.widgets.dashboard-notifications',
                        'dashboard-feed' => 'plugins.admin.widgets.dashboard-feed',
                        'dashboard-pages' => 'plugins.admin.widgets.dashboard-pages'
                    ],
                    'Notifications' => 'plugins.admin.Notifications',
                    'notifications' => [
                        'feed' => 'plugins.admin.notifications.feed',
                        'dashboard' => 'plugins.admin.notifications.dashboard',
                        'plugins' => 'plugins.admin.notifications.plugins',
                        'themes' => 'plugins.admin.notifications.themes'
                    ],
                    'Popularity' => 'plugins.admin.Popularity',
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ]
                ],
                'admin-addon-user-manager' => [
                    'enabled' => 'plugins.admin-addon-user-manager.enabled',
                    'default_list_style' => 'plugins.admin-addon-user-manager.default_list_style',
                    'pagination' => [
                        'per_page' => 'plugins.admin-addon-user-manager.pagination.per_page'
                    ],
                    'custom_permissions' => 'plugins.admin-addon-user-manager.custom_permissions'
                ],
                'auto-date' => [
                    'enabled' => 'plugins.auto-date.enabled'
                ],
                'cascade-filters' => [
                    'enabled' => 'plugins.cascade-filters.enabled',
                    'select_pages' => 'plugins.cascade-filters.select_pages',
                    'taxonomy_filters' => 'plugins.cascade-filters.taxonomy_filters'
                ],
                'cookieconsent' => [
                    'enabled' => 'plugins.cookieconsent.enabled',
                    'content_message' => 'plugins.cookieconsent.content_message',
                    'content_dismiss' => 'plugins.cookieconsent.content_dismiss',
                    'content_link' => 'plugins.cookieconsent.content_link',
                    'content_href' => 'plugins.cookieconsent.content_href',
                    'popup_background_color' => 'plugins.cookieconsent.popup_background_color',
                    'popup_text_color' => 'plugins.cookieconsent.popup_text_color',
                    'button_background_color' => 'plugins.cookieconsent.button_background_color',
                    'button_text_color' => 'plugins.cookieconsent.button_text_color',
                    'button_border_color' => 'plugins.cookieconsent.button_border_color',
                    'position' => 'plugins.cookieconsent.position',
                    'theme' => 'plugins.cookieconsent.theme'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'content_type' => 'plugins.email.content_type',
                    'charset' => 'plugins.email.charset',
                    'from' => 'plugins.email.from',
                    'from_name' => 'plugins.email.from_name',
                    'to' => 'plugins.email.to',
                    'to_name' => 'plugins.email.to_name',
                    'cc' => 'plugins.email.cc',
                    'cc_name' => 'plugins.email.cc_name',
                    'bcc' => 'plugins.email.bcc',
                    'reply_to' => 'plugins.email.reply_to',
                    'reply_to_name' => 'plugins.email.reply_to_name',
                    'body' => 'plugins.email.body',
                    'debug' => 'plugins.email.debug'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled',
                    'general' => 'plugins.form.general',
                    'built_in_css' => 'plugins.form.built_in_css',
                    'refresh_prevention' => 'plugins.form.refresh_prevention',
                    'files' => [
                        'multiple' => 'plugins.form.files.multiple',
                        'limit' => 'plugins.form.files.limit',
                        'destination' => 'plugins.form.files.destination',
                        'accept' => 'plugins.form.files.accept',
                        'filesize' => 'plugins.form.files.filesize',
                        'avoid_overwriting' => 'plugins.form.files.avoid_overwriting',
                        'random_name' => 'plugins.form.files.random_name'
                    ],
                    'recaptcha' => [
                        'site_key' => 'plugins.form.recaptcha.site_key',
                        'secret_key' => 'plugins.form.recaptcha.secret_key'
                    ]
                ],
                'frontend-edit-button' => [
                    'enabled' => 'plugins.frontend-edit-button.enabled',
                    'position' => 'plugins.frontend-edit-button.position',
                    'showLabel' => 'plugins.frontend-edit-button.showLabel',
                    'showIcon' => 'plugins.frontend-edit-button.showIcon'
                ],
                'jscomments' => [
                    'tabs' => 'plugins.jscomments.tabs',
                    'jscomments' => 'plugins.jscomments.jscomments',
                    'enabled' => 'plugins.jscomments.enabled',
                    'active' => 'plugins.jscomments.active',
                    'provider' => 'plugins.jscomments.provider',
                    'params' => 'plugins.jscomments.params',
                    'discourse' => 'plugins.jscomments.discourse',
                    'providers' => [
                        'discourse' => [
                            'host' => 'plugins.jscomments.providers.discourse.host'
                        ],
                        'disqus' => [
                            'shortname' => 'plugins.jscomments.providers.disqus.shortname',
                            'show_count' => 'plugins.jscomments.providers.disqus.show_count',
                            'language' => 'plugins.jscomments.providers.disqus.language'
                        ],
                        'facebook' => [
                            'app_id' => 'plugins.jscomments.providers.facebook.app_id',
                            'num_posts' => 'plugins.jscomments.providers.facebook.num_posts',
                            'colorscheme' => 'plugins.jscomments.providers.facebook.colorscheme',
                            'order_by' => 'plugins.jscomments.providers.facebook.order_by',
                            'language' => 'plugins.jscomments.providers.facebook.language',
                            'width' => 'plugins.jscomments.providers.facebook.width'
                        ],
                        'googleplus' => [
                            'show_count' => 'plugins.jscomments.providers.googleplus.show_count',
                            'language' => 'plugins.jscomments.providers.googleplus.language',
                            'width' => 'plugins.jscomments.providers.googleplus.width'
                        ],
                        'intensedebate' => [
                            'account_number' => 'plugins.jscomments.providers.intensedebate.account_number'
                        ],
                        'isso' => [
                            'host' => 'plugins.jscomments.providers.isso.host',
                            'builtin_css' => 'plugins.jscomments.providers.isso.builtin_css',
                            'language' => 'plugins.jscomments.providers.isso.language',
                            'reply_to_self' => 'plugins.jscomments.providers.isso.reply_to_self',
                            'require' => 'plugins.jscomments.providers.isso.require',
                            'comments' => [
                                'number' => 'plugins.jscomments.providers.isso.comments.number',
                                'nested_number' => 'plugins.jscomments.providers.isso.comments.nested_number',
                                'reveal' => 'plugins.jscomments.providers.isso.comments.reveal'
                            ],
                            'avatar' => [
                                'enabled' => 'plugins.jscomments.providers.isso.avatar.enabled',
                                'background' => 'plugins.jscomments.providers.isso.avatar.background',
                                'foreground' => 'plugins.jscomments.providers.isso.avatar.foreground'
                            ],
                            'vote' => [
                                'enabled' => 'plugins.jscomments.providers.isso.vote.enabled',
                                'levels' => 'plugins.jscomments.providers.isso.vote.levels'
                            ]
                        ],
                        'muut' => [
                            'forum' => 'plugins.jscomments.providers.muut.forum',
                            'channel' => 'plugins.jscomments.providers.muut.channel',
                            'widget' => 'plugins.jscomments.providers.muut.widget',
                            'show_online' => 'plugins.jscomments.providers.muut.show_online',
                            'show_title' => 'plugins.jscomments.providers.muut.show_title',
                            'upload' => 'plugins.jscomments.providers.muut.upload',
                            'share' => 'plugins.jscomments.providers.muut.share',
                            'language' => 'plugins.jscomments.providers.muut.language'
                        ],
                        'hypercomments' => [
                            'widget_id' => 'plugins.jscomments.providers.hypercomments.widget_id',
                            'social' => 'plugins.jscomments.providers.hypercomments.social'
                        ]
                    ],
                    'disqus' => 'plugins.jscomments.disqus',
                    'facebook' => 'plugins.jscomments.facebook',
                    'googleplus' => 'plugins.jscomments.googleplus',
                    'intensedebate' => 'plugins.jscomments.intensedebate',
                    'isso' => 'plugins.jscomments.isso',
                    'muut' => 'plugins.jscomments.muut',
                    'hypercomments' => 'plugins.jscomments.hypercomments'
                ],
                'login' => [
                    'tabs' => 'plugins.login.tabs',
                    'login' => 'plugins.login.login',
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'route' => 'plugins.login.route',
                    'redirect_after_login' => 'plugins.login.redirect_after_login',
                    'route_forgot' => 'plugins.login.route_forgot',
                    'route_reset' => 'plugins.login.route_reset',
                    'route_profile' => 'plugins.login.route_profile',
                    'parent_acl' => 'plugins.login.parent_acl',
                    'dynamic_page_visibility' => 'plugins.login.dynamic_page_visibility',
                    'protect_protected_page_media' => 'plugins.login.protect_protected_page_media',
                    'routes' => 'plugins.login.routes',
                    'route_activate' => 'plugins.login.route_activate',
                    'route_register' => 'plugins.login.route_register',
                    'user_registration' => [
                        'redirect_after_registration' => 'plugins.login.user_registration.redirect_after_registration',
                        'redirect_after_activation' => 'plugins.login.user_registration.redirect_after_activation',
                        'enabled' => 'plugins.login.user_registration.enabled',
                        'fields' => 'plugins.login.user_registration.fields',
                        'default_values' => 'plugins.login.user_registration.default_values',
                        'groups' => 'plugins.login.user_registration.groups',
                        'access' => [
                            'site' => 'plugins.login.user_registration.access.site'
                        ],
                        'options' => [
                            'validate_password1_and_password2' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                            'set_user_disabled' => 'plugins.login.user_registration.options.set_user_disabled',
                            'login_after_registration' => 'plugins.login.user_registration.options.login_after_registration',
                            'send_activation_email' => 'plugins.login.user_registration.options.send_activation_email',
                            'send_notification_email' => 'plugins.login.user_registration.options.send_notification_email',
                            'send_welcome_email' => 'plugins.login.user_registration.options.send_welcome_email'
                        ]
                    ],
                    'rememberme' => [
                        'enabled' => 'plugins.login.rememberme.enabled',
                        'timeout' => 'plugins.login.rememberme.timeout',
                        'name' => 'plugins.login.rememberme.name'
                    ],
                    'registration' => 'plugins.login.registration',
                    'registration_fields' => 'plugins.login.registration_fields',
                    'access_levels' => 'plugins.login.access_levels',
                    'options' => 'plugins.login.options',
                    'Security' => 'plugins.login.Security',
                    'max_pw_resets_count' => 'plugins.login.max_pw_resets_count',
                    'max_pw_resets_interval' => 'plugins.login.max_pw_resets_interval',
                    'max_login_count' => 'plugins.login.max_login_count',
                    'max_login_interval' => 'plugins.login.max_login_interval'
                ],
                'login-oauth' => [
                    'tabs' => 'plugins.login-oauth.tabs',
                    'oauth' => 'plugins.login-oauth.oauth',
                    'enabled' => 'plugins.login-oauth.enabled',
                    'built_in_css' => 'plugins.login-oauth.built_in_css',
                    'providers' => [
                        'Facebook' => [
                            'enabled' => 'plugins.login-oauth.providers.Facebook.enabled',
                            'credentials' => [
                                'key' => 'plugins.login-oauth.providers.Facebook.credentials.key',
                                'secret' => 'plugins.login-oauth.providers.Facebook.credentials.secret'
                            ]
                        ],
                        'Google' => [
                            'enabled' => 'plugins.login-oauth.providers.Google.enabled',
                            'credentials' => [
                                'key' => 'plugins.login-oauth.providers.Google.credentials.key',
                                'secret' => 'plugins.login-oauth.providers.Google.credentials.secret'
                            ],
                            'whitelist' => 'plugins.login-oauth.providers.Google.whitelist',
                            'blacklist' => 'plugins.login-oauth.providers.Google.blacklist'
                        ],
                        'GitHub' => [
                            'enabled' => 'plugins.login-oauth.providers.GitHub.enabled',
                            'credentials' => [
                                'key' => 'plugins.login-oauth.providers.GitHub.credentials.key',
                                'secret' => 'plugins.login-oauth.providers.GitHub.credentials.secret'
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => 'plugins.login-oauth.providers.Twitter.enabled',
                            'credentials' => [
                                'key' => 'plugins.login-oauth.providers.Twitter.credentials.key',
                                'secret' => 'plugins.login-oauth.providers.Twitter.credentials.secret'
                            ]
                        ],
                        'Linkedin' => [
                            'enabled' => 'plugins.login-oauth.providers.Linkedin.enabled',
                            'credentials' => [
                                'key' => 'plugins.login-oauth.providers.Linkedin.credentials.key',
                                'secret' => 'plugins.login-oauth.providers.Linkedin.credentials.secret'
                            ]
                        ]
                    ]
                ],
                'markdown-notices' => [
                    'enabled' => 'plugins.markdown-notices.enabled',
                    'built_in_css' => 'plugins.markdown-notices.built_in_css',
                    'level_classes' => 'plugins.markdown-notices.level_classes'
                ],
                'page-inject' => [
                    'enabled' => 'plugins.page-inject.enabled',
                    'active' => 'plugins.page-inject.active',
                    'processed_content' => 'plugins.page-inject.processed_content'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'quicksave' => [
                    'enabled' => 'plugins.quicksave.enabled',
                    'clear_dirty' => 'plugins.quicksave.clear_dirty'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'basics_title' => 'plugins.relatedpages.basics_title',
                    'limit' => 'plugins.relatedpages.limit',
                    'show_score' => 'plugins.relatedpages.show_score',
                    'filter' => [
                        'items' => 'plugins.relatedpages.filter.items',
                        'order' => [
                            'by' => 'plugins.relatedpages.filter.order.by',
                            'dir' => 'plugins.relatedpages.filter.order.dir'
                        ]
                    ],
                    'page_in_filter' => 'plugins.relatedpages.page_in_filter',
                    'explicit_pages' => [
                        'process' => 'plugins.relatedpages.explicit_pages.process',
                        'score' => 'plugins.relatedpages.explicit_pages.score'
                    ],
                    'taxonomy_title' => 'plugins.relatedpages.taxonomy_title',
                    'taxonomy_match' => [
                        'taxonomy' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                        'taxonomy_taxonomy' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
                        ],
                        'taxonomy_content' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
                        ]
                    ],
                    'content_title' => 'plugins.relatedpages.content_title',
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ],
                    'advanced_title' => 'plugins.relatedpages.advanced_title'
                ],
                'resize-images' => [
                    'enabled' => 'plugins.resize-images.enabled',
                    'adapter' => 'plugins.resize-images.adapter',
                    'remove_original' => 'plugins.resize-images.remove_original',
                    'sizes' => [
                        'width' => 'plugins.resize-images.sizes.width',
                        'quality' => 'plugins.resize-images.sizes.quality'
                    ]
                ],
                'shortcode-ui' => [
                    'enabled' => 'plugins.shortcode-ui.enabled',
                    'theme' => [
                        'tabs' => 'plugins.shortcode-ui.theme.tabs'
                    ]
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'search_content' => 'plugins.simplesearch.search_content',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'built_in_js' => 'plugins.simplesearch.built_in_js',
                    'display_button' => 'plugins.simplesearch.display_button',
                    'ignore_accented_characters' => 'plugins.simplesearch.ignore_accented_characters',
                    'min_query_length' => 'plugins.simplesearch.min_query_length',
                    'route' => 'plugins.simplesearch.route',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => [
                        'category' => 'plugins.simplesearch.filters.category'
                    ],
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator',
                    'order' => [
                        'by' => 'plugins.simplesearch.order.by',
                        'dir' => 'plugins.simplesearch.order.dir'
                    ]
                ],
                'smileys' => [
                    'global' => 'plugins.smileys.global',
                    'enabled' => 'plugins.smileys.enabled',
                    'built_in_css' => 'plugins.smileys.built_in_css',
                    'weight' => 'plugins.smileys.weight',
                    'default' => 'plugins.smileys.default',
                    'pack' => 'plugins.smileys.pack',
                    'specific' => 'plugins.smileys.specific',
                    'exclude' => [
                        'tags' => 'plugins.smileys.exclude.tags',
                        'classes' => 'plugins.smileys.exclude.classes'
                    ],
                    'process' => 'plugins.smileys.process'
                ],
                'star-ratings' => [
                    'enabled' => 'plugins.star-ratings.enabled',
                    'callback' => 'plugins.star-ratings.callback',
                    'built_in_css' => 'plugins.star-ratings.built_in_css',
                    'vote_access' => 'plugins.star-ratings.vote_access',
                    'unique_ip_check' => 'plugins.star-ratings.unique_ip_check',
                    'initial_stars' => 'plugins.star-ratings.initial_stars',
                    'total_stars' => 'plugins.star-ratings.total_stars',
                    'star_size' => 'plugins.star-ratings.star_size',
                    'use_full_stars' => 'plugins.star-ratings.use_full_stars',
                    'empty_color' => 'plugins.star-ratings.empty_color',
                    'hover_color' => 'plugins.star-ratings.hover_color',
                    'active_color' => 'plugins.star-ratings.active_color',
                    'use_gradient' => 'plugins.star-ratings.use_gradient',
                    'star_gradient_start' => 'plugins.star-ratings.star_gradient_start',
                    'star_gradient_end' => 'plugins.star-ratings.star_gradient_end',
                    'star_shape' => 'plugins.star-ratings.star_shape',
                    'stroke_width' => 'plugins.star-ratings.stroke_width',
                    'stroke_color' => 'plugins.star-ratings.stroke_color',
                    'readonly' => 'plugins.star-ratings.readonly',
                    'disable_after_rate' => 'plugins.star-ratings.disable_after_rate',
                    'show_count' => 'plugins.star-ratings.show_count',
                    'show_score' => 'plugins.star-ratings.show_score',
                    'aggregate_rating' => 'plugins.star-ratings.aggregate_rating'
                ],
                'tagcloud' => [
                    'enabled' => 'plugins.tagcloud.enabled',
                    'threshold' => 'plugins.tagcloud.threshold',
                    'built_in_css' => 'plugins.tagcloud.built_in_css'
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ],
                'tinymce-editor' => [
                    'enabled' => 'plugins.tinymce-editor.enabled',
                    'apikey' => 'plugins.tinymce-editor.apikey',
                    'plugins' => 'plugins.tinymce-editor.plugins',
                    'parameters' => [
                        'name' => 'plugins.tinymce-editor.parameters.name',
                        'value' => 'plugins.tinymce-editor.parameters.value'
                    ],
                    'menubar' => 'plugins.tinymce-editor.menubar',
                    'menu' => [
                        'title' => 'plugins.tinymce-editor.menu.title',
                        'items' => 'plugins.tinymce-editor.menu.items'
                    ],
                    'toolbar' => [
                        'row' => 'plugins.tinymce-editor.toolbar.row'
                    ],
                    'branding' => 'plugins.tinymce-editor.branding',
                    'statusbar' => 'plugins.tinymce-editor.statusbar'
                ],
                'twigfeeds' => [
                    'enabled' => 'plugins.twigfeeds.enabled',
                    'cache' => 'plugins.twigfeeds.cache',
                    'static_cache' => 'plugins.twigfeeds.static_cache',
                    'debug' => 'plugins.twigfeeds.debug',
                    'silence_security' => 'plugins.twigfeeds.silence_security',
                    'twig_feeds' => [
                        '*' => [
                            'source' => 'plugins.twigfeeds.twig_feeds.*.source',
                            'name' => 'plugins.twigfeeds.twig_feeds.*.name',
                            'category' => 'plugins.twigfeeds.twig_feeds.*.category',
                            'type' => 'plugins.twigfeeds.twig_feeds.*.type',
                            'start' => 'plugins.twigfeeds.twig_feeds.*.start',
                            'end' => 'plugins.twigfeeds.twig_feeds.*.end',
                            'cache_time' => 'plugins.twigfeeds.twig_feeds.*.cache_time'
                        ]
                    ]
                ]
            ]
        ],
        'dynamic' => [
            'system.timezone' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::timezones'
                ]
            ],
            'system.pages.dateformat.default' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Common\\Utils::dateFormats'
                ]
            ],
            'plugins.cascade-filters.taxonomy_filters' => [
                'default' => [
                    'action' => 'config',
                    'params' => 'site.taxonomies'
                ]
            ],
            'plugins.jscomments.provider' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Plugin\\JSCommentsPlugin::getProviders'
                ]
            ],
            'plugins.login.user_registration.groups' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\User\\Groups::groups'
                ]
            ],
            'plugins.smileys.pack' => [
                'options' => [
                    'action' => 'data',
                    'params' => '\\Grav\\Plugin\\SmileysPlugin::getSmileyPacks'
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
