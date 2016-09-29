<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 *
 * Version:    3.4
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
        'oxshopcontrol' => 'marm/yamm/ma_yamm_shopcontrol',
    ),
    'files'       => array(
        'ma_yamm_shopcontrol' => 'marm/yamm/src/oxid/core/ma_yamm_shopcontrol.php',
    ),
    'templates'   => array(),
    'blocks'      => array(),
    'events'      => array(),
    'settings'    => array(),
);
