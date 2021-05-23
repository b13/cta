<?php

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Content type "CTA"',
    'description' => 'Adds a CTA content type to tt_content',
    'category' => 'backend',
    'version' => '1.1.2',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => 'tt_content',
    'clearCacheOnLoad' => 0,
    'author' => 'David Steeb, b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'constraints' => [
        'depends' => [
            'fluid_styled_content' => '*',
            'typo3' => '9.5.0-11.5.99',
        ]
    ]
);
