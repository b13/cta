<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'link' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:link.formlabel',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => '30',
            'max' => '1024',
            'eval' => 'trim',
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    ],
                ],
            ],
            'softref' => 'typolink'
        ]
    ],
    'linklabel' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:linklabel.formlabel',
        'config' => [
            'type' => 'input',
            'size' => '30',
            'max' => '256',
        ]
    ],
    'linkconfig' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:linkconfig.formlabel',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
            ],
            'default' => '0'
        ]
    ],
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    ['LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:contentelements.title', 'cta', 'ctype-cta'],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['palettes']['linklabel'] = [
    'showitem' => 'link,linklabel',
    'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:palettes.linklabel.title'
];

$GLOBALS['TCA']['tt_content']['palettes']['linklabelconfig'] = [
    'showitem' => 'link,linklabel,linkconfig',
    'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:palettes.linklabelconfig.title'
];

// use the same configuration for visible backend fields as "Textmedia"
if (!isset($GLOBALS['TCA']['tt_content']['defaultTypeConfiguration'])) {
    $showItemParts = explode('--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,', $GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem']);
    $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['begin'] = '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,';
    $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['end'] = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' . $showItemParts[1];
}
$GLOBALS['TCA']['tt_content']['types']['cta'] = [
    'showitem' => $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['begin'] . '
        layout,
        --palette--;;linklabelconfig,
        ' . $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['end']
];
