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
        /**
         *  Register default TypoScript for FileListGallery
         */
        ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Extensions/FileListGallery',
            'Resterland - Image Gallery'
        );
    },
    'resterland'
);
