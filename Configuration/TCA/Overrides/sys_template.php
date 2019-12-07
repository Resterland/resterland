<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

call_user_func(
    function ($_EXTKEY) {
        /**
         * Default TypoScript for Resterland
         */
        ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript',
            'Resterland - Core'
        );
    },
    'resterland'
);
