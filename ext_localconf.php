<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['resterland'] = 'EXT:resterland/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:felogin/locallang.xlf'][] = 'EXT:resterland/Resources/Private/Language/locallang_felogin.xlf';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['user'] = array(
    'id' => 'Indonesian',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['dependencies'] = array(
    'id' => array('id_ID', 'id'),
);

$boot = function ($_EXTKEY) {

    /* ===========================================================================
        Register an "image gallery" layout
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['file_list']['templateLayouts'][] = [
        'Image Gallery', // You may use a LLL:EXT: label reference here of course!
        'MyGallery',
    ];
};
$boot($_EXTKEY);
unset($boot);
