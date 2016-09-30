<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is Open Source and may be redistributed as long as you keep the notice.
 * For contact information please visit http://www.marmalade.de
 *
 * Author URI: http://www.marmalade.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'marm/yamm',
    'title'       => 'marmalade :: YAMM',
    'description' => 'Yet Another Meta Module',
    'thumbnail'   => 'marmalade.jpg',
    'version'     => '1.0.0',
    'author'      => 'marmalade GmbH',
    'url'         => 'http://www.marmalade.de',
    'email'       => 'support@marmalade.de',
    'extend'      => array(
        'oxshopcontrol' => 'marm/yamm/src/oxid/core/marm_yamm_oxshopcontrol',
    ),
    'templates'   => array(),
    'blocks'      => array(),
    'events'      => array(),
    'settings'    => array(),
);
