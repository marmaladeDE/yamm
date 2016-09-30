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
 * @extends oxshopcontrol
 */
class marm_yamm_oxshopcontrol extends marm_yamm_oxshopcontrol_parent
{
    /**
     * Start
     *
     * @param string $sClass
     * @param string $sFunction
     * @param array $aParams
     * @param array $aViewsChain
     * @return void
     */
    public function start($sClass = null, $sFunction = null, $aParams = null, $aViewsChain = null)
    {
        require_once __DIR__ . '/../bootstrap.php';

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }
}
