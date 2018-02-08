<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/config/site.yaml',
    'modified' => 1517926893,
    'data' => [
        'title' => 'Teams Releases',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Mio.',
            'email' => 'mio.bluewatermelon@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'type',
            3 => 'genre',
            4 => 'pays'
        ],
        'metadata' => [
            'description' => 'Toutes les sorties vostfr des Fansub !'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
