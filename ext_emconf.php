<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cta".
 *
 * Generated 13-12-2017 13:13
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Content-type "CTA"',
    'description' => 'Adds a CTA Content-type to tt_content',
    'category' => 'backend',
    'shy' => 0,
    'version' => '1.0.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => 'tt_content',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'David Steeb, b13 GmbH',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'constraints' =>
        array (
            'depends' =>
                array (
                    'php' => '5.3.7-0.0.0',
                    'fluid_styled_content' => '',
                ),
            'conflicts' =>
                array (
                    'css_styled_content' => '',
                ),
            'suggests' =>
                array (
                ),
        ),
);
