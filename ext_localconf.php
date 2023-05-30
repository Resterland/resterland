<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['resterland'] = 'EXT:resterland/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland/Configuration/TsConfig/Page/All.tsconfig">');
