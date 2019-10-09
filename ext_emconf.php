<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland',
    'description' => 'Resterland extension is based on the bootstrap package extension by Bajamin Kott. With a layout switch integrated.',
    'category' => 'extension',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.9.99',
            'news' => '7.3.0-7.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Resterland\\' => 'Classes'
        ],
    ],
    'state' => 'beta',
    'version' => '2.3.1',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand'
];
