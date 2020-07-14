<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ce_headerimage',
    'Configuration/TypoScript',
    'Header Image Slider'
);
// add new content element to show a header image
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ce_headerimage', 'static/', 'Headerimage');
