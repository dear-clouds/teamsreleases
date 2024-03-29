<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://smileys/smileys.yaml',
    'modified' => 1517508084,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'weight' => 1,
        'pack' => 'simple_smileys',
        'process' => true,
        'exclude' => [
            'tags' => [
                0 => 'code',
                1 => 'pre'
            ],
            'classes' => [
                0 => 'mathjax',
                1 => 'latex'
            ]
        ]
    ]
];
