<?php
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ce_headerimage',
    'Slider',
    'LLL:EXT:ce_headerimage/Resources/Private/Language/locallang_db.xlf:plugin.title'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:ce_headerimage/Configuration/FlexForms/Slider.xml',
    'ceheaderimage_slider'
);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'Bild fuer Kopfbereich',
    'headerimage',
    'i/tt_content_image.gif'
];
$GLOBALS['TCA']['tt_content']['palettes']['myframes'] = [
    'showitem' => 'section_frame;LLL:EXT:cms/locallang_ttc.xml:section_frame_formlabel',
    'canNotCollapse' => 1
];
// there is no palette "imagefiles" in 6.0 anymore
$GLOBALS['TCA']['tt_content']['types']['headerimage'] = [
    'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images, image, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imagelinks;imagelinks, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.image_settings;image_settings, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imageblock;imageblock, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility, --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended, tx_nhsharedce_categories;;;;1-1-1, --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category, categories'
];
$GLOBALS['TCA']['tt_content']['types']['ceheaderimage_slider'] = [
    'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,pi_flexform,--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.myframes;myframes,--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imagefiles;imagefiles,--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.image_accessibility;image_accessibility,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access'
];
