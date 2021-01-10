<?php

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Content-type "CTA"',
    'description' => 'Adds a CTA Content-type to tt_content',
    'category' => 'backend',
    'version' => '1.1.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => 'tt_content',
    'clearcacheonload' => 0,
    'author' => 'David Steeb, b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'constraints' => [
        'depends' =>
            array (
                'fluid_styled_content' => '*',
            ),
        'conflicts' => [],
        'suggests' => []
    ]
);
