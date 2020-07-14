<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.ce_headerimage',
    'Slider',
    [
        'Slider' => 'show'
    ],
    // non-cacheable actions
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '
    mod.wizards.newContentElement.wizardItems {
        common {
            elements {
                headerImageSlider {
                    icon = ' . \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath('ce_headerimage') . 'Resources/Public/Icons/imageslider.gif
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
