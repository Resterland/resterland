<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland',
    'description' => 'This extension is based on the bootstrap package extension by Bajamin Kott. Layout switch integration. Includes a simple gallery based on the extension file_list from Xavier Perseguers.',
    'category' => 'extension',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.9.99',
            'bootstrap_package' => '10.0.0-11.9.99',
            'vhs' => '5.2.0-5.2.99',
            'gridelements' => '9.3.0-9.3.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Resterland\\' => 'Classes'
        ],
    ],
    'state' => 'beta',
    'version' => '3.0.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand'
];
