<?php
defined('TYPO3_MODE') || die();

/**
 * Temporary variables
 */
$extensionKey = 'resterland';

/**
 * Register PageTS for Resterland
 */

// BackendLayouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
    'Resterland: Backend Layouts'
);

// TCEMAIN
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEMAIN.tsconfig',
    'Resterland: TCEMAIN'
);

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEFORM.tsconfig',
    'Resterland: TCEFORM'
);

// SHARED
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/SHARED.tsconfig',
    'Resterland: SHARED'
);

/**
 * workaround for all pages "Hide page if no translation for current language exists".
 * This checkbox is available for every page under the tab "language".
 * To automaticly set this flag for new created pages:
 */
$GLOBALS['TCA']['pages']['columns']['l18n_cfg']['config']['default'] = 2;
