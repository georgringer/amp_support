<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'AMP support',
    'description' => 'amp',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.13-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
