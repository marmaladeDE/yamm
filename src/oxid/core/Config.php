<?php
/**
 * This file is part of a marmalade GmbH project
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 * Version:    1.0
 * Author:     Jens Richter <richter@marmalade.de>
 * Author URI: http://www.marmalade.de
 */

namespace Marmalade\Yamm;

class Config extends Config_parent
{
    public function initializeShop()
    {
        include_once __DIR__ . '/../bootstrap.php';
        parent::initializeShop();
    }
}
