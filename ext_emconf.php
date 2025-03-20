<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Resterland\\' => 'Classes',
        ],
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand',
    'version' => '8.0.0',
];
