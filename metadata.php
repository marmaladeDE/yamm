<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 *
 * Version:    3.4
 * Author:     Jens Richter <richter@marmalade.de>
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
    ),
    'files'       => array(
        'Marm\\Yamm\\DIC'
            => 'marm/yamm/src/Yamm/DIC.php',
        'Pimple'
            => 'marm/yamm/lib/Pimple.php',
        'Kore\DataObject\DataObject'
            => 'marm/yamm/lib/DataObject.php',
    ),
    'templates'   => array(
    ),
    'blocks'      => array(
    ),
    'events'      => array(
    ),
    'settings'    => array(
    ),
);
