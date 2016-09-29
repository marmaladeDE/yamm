<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 *
 * Version:    1.0
 * Author URI: http://www.marmalade.de
 */

namespace Marm\Yamm;

require_once __DIR__ . '/../../vendor/autoload.php';

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

    public function findOtherModules($moduleDirectory)
    {
        $dicIncludeFiles = array_filter(array_merge(
            glob($moduleDirectory . '/*/dic.php'),
            glob($moduleDirectory . '/*/*/dic.php')
        ));

        $dic = $this;
        foreach ($dicIncludeFiles as $dicIncludeFile) {
            include $dicIncludeFile;
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
