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
class ma_yamm_shopcontrol extends ma_yamm_shopcontrol_parent
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
        $dic = \Marm\Yamm\DIC::getInstance();
        $dic->findOtherModules(\oxRegistry::getConfig()->getConfigParam('sShopDir') . 'modules/');
        oxRegistry::set('yamm_dic', $dic);

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }
}
