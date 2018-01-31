<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
// register a new plugin for header image slider
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Slider',
    'LLL:EXT:ce_headerimage/Resources/Private/Language/locallang_db.xlf:plugin.title'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Header Image Slider'
);
// add new content element to show a header image
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/', 'Headerimage');
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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Slider.xml',
    'ceheaderimage_slider'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '
    mod.wizards.newContentElement.wizardItems {
        common {
            elements {
                headerImageSlider {
                    icon = ' . \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath($_EXTKEY) . 'Resources/Public/Icons/imageslider.gif
                    title = Header Image Slider
                    description = Inserts a plugin which shows slideable Header Images with a little description and link
                    tt_content_defValues {
                        CType = ceheaderimage_slider
                    }
                }
            }
            show := addToList(headerImageSlider)
        }
    }
'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_ceheaderimage_domain_model_slider',
    'EXT:ce_headerimage/Resources/Private/Language/tx_ceheaderimage_domain_model_slider.xlf'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ceheaderimage_domain_model_slider');
