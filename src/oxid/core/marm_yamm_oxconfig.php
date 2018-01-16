<?php
/**
 * This file is part of a marmalade GmbH project
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 * Version:    1.0
 * Author:     Jens Richter <richter@marmalade.de>
 * Author URI: http://www.marmalade.de
 */

class marm_yamm_oxconfig extends marm_yamm_oxconfig_parent
{
    public function init()
    {
        if ($this->_blInit) {
            return;
        }
        parent::init();
        include_once __DIR__ . '/../bootstrap.php';
    }
}
