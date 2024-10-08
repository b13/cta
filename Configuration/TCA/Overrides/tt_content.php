<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'tx_cta_link' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:link.formlabel',
        'config' => [],
    ],
    'tx_cta_linklabel' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:linklabel.formlabel',
        'config' => [
            'type' => 'input',
            'size' => '30',
            'max' => '256',
        ],
    ],
    'tx_cta_linkconfig' => [
        'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:linkconfig.formlabel',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
            ],
        ],
    ],
]);

if ((\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class))->getMajorVersion() < 12) {
    $GLOBALS['TCA']['tt_content']['columns']['tx_cta_link']['config'] = [
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
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:contentelements.title', 'cta', 'ctype-cta'],
        'textmedia',
        'after'
    );
} else {
    $GLOBALS['TCA']['tt_content']['columns']['tx_cta_link']['config'] = [
        'type' => 'link',
        'size' => '30',
        'appearance' => [
            'browserTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:contentelements.title', 'value' => 'cta', 'icon' => 'ctype-cta'],
        'textmedia',
        'after'
    );
}

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cta'] = 'ctype-cta';

$GLOBALS['TCA']['tt_content']['palettes']['linklabel'] = [
    'showitem' => 'tx_cta_link,tx_cta_linklabel',
    'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:palettes.linklabel.title'
];

$GLOBALS['TCA']['tt_content']['palettes']['linklabelconfig'] = [
    'showitem' => 'tx_cta_link,tx_cta_linklabel,tx_cta_linkconfig',
    'label' => 'LLL:EXT:cta/Resources/Private/Language/locallang_db.xlf:palettes.linklabelconfig.title'
];

// use the same configuration for visible backend fields as "Textmedia"
if (!isset($GLOBALS['TCA']['tt_content']['defaultTypeConfiguration'])) {
    $showItemParts = explode('--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,', $GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem']);
    $GLOBALS['TCA']['tt_content']['types']['cta'] = [
        'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        layout,
        --palette--;;linklabelconfig,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' . $showItemParts[1]
    ];
} else {
    $GLOBALS['TCA']['tt_content']['types']['cta'] = [
        'showitem' => $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['begin'] . '
        layout,
        --palette--;;linklabelconfig,
        ' . $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['end']
    ];
}
