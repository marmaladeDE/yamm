<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is Open Source and may be redistributed as long as you keep the notice.
 * For contact information please visit http://www.marmalade.de
 *
 * Author URI: http://www.marmalade.de
 */

if(!function_exists('oxNew'))
{
    require_once __DIR__ . '/../../../../../bootstrap.php';
}

require_once __DIR__ . '/../../vendor/autoload.php';

$dic = \Marm\Yamm\DIC::getInstance();
$moduleList = oxNew('oxModuleList');
$dic->findOtherModules(\oxRegistry::getConfig()->getModulesDir(), $moduleList->getActiveModuleInfo());
oxRegistry::set('yamm_dic', $dic);

