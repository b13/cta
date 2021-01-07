<?php

defined('TYPO3_MODE') or die();

/*
 * This file is part of the package b13/cta.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

call_user_func(static function () {
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ctype-cta',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:cta/Resources/Public/Icons/Cta.svg']
    );
});
