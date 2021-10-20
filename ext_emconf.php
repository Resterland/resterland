<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland',
    'description' => 'This extension is based on the bootstrap package extension by Bajamin Kott. Layout switch integration.',
    'category' => 'extension',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99',
            'bootstrap_package' => '11.0.0-12.9.99'
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
    'version' => '4.2.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand WebAtelier'
];
