<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/teamsreleases/user/config/plugins/email.yaml',
    'modified' => 1517617899,
    'data' => [
        'enabled' => true,
        'from' => 'teamsreleases@dearclouds.com',
        'from_name' => 'Teams Releases',
        'to' => 'teamsreleases@dearclouds.com',
        'to_name' => 'Mio.',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'SSL0.OVH.NET',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'teamsreleases@dearclouds.com',
                'password' => 'ElPadre1995'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true,
        'cc' => 'mio.bluewatermelon@gmail.com',
        'cc_name' => 'Mio.',
        'reply_to' => 'teamsreleases@dearclouds.com',
        'reply_to_name' => 'Teams Releases'
    ]
];
