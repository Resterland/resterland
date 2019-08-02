<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['resterland'] = 'EXT:resterland/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:felogin/locallang.xlf'][] = 'EXT:resterland/Resources/Private/Language/locallangf_felogin.xlf';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['id']['EXT:resterland/Resources/Private/Language/locallang.xlf'][] = 'EXT:resterland/Resources/Private/Language/id.locallangf.xlf';
