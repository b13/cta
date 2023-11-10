<?php

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Content type "CTA"',
    'description' => 'Adds a CTA content type to tt_content',
    'category' => 'backend',
    'version' => '2.0.2',
    'state' => 'stable',
    'author' => 'David Steeb, b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'constraints' => [
        'depends' => [
            'fluid_styled_content' => '*',
            'typo3' => '10.4.0-12.99.99',
        ]
    ]
);
