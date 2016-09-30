<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is Open Source and may be redistributed as long as you keep the notice.
 * For contact information please visit http://www.marmalade.de
 *
 * Author URI: http://www.marmalade.de
 */

namespace Marm\Yamm;

/**
 * This DIC is just a DIC wrapper to contain module DICs
 */
class DIC extends \Pimple\Container
{
    private static $instance;

    private $tags = array();

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function findOtherModules($moduleDirectory, $modules)
    {
        $dic = $this;
        foreach ($modules as $name => $path) {
            $dicFileName = $moduleDirectory . '/' . $path . '/dic.php';
            if (file_exists($dicFileName)) {
                include $dicFileName;
            }
        }
    }

    public function tag($serviceName, $tagName)
    {
        if (!isset($this->tags[$tagName])) {
            $this->tags[$tagName] = array();
        }

        $this->tags[$tagName][] = $serviceName;
    }

    public function getTagged($tagName)
    {
        if (!isset($this->tags[$tagName])) {
            return array();
        }

        $dic = $this;
        return array_map(
            function ($serviceName) use ($dic) {
                return $this[$serviceName];
            },
            $this->tags[$tagName]
        );
    }
}
