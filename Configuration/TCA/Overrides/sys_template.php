<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die('Access denied.');
call_user_func(function () {
    /**
     * Temporary variables
     */
    $extensionKey = 'resterland';

    /**
     * Default TypoScript for Resterland
     */
    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Resterland'
    );
});
