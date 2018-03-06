<?php
/**
 * This file is part of a marmalade GmbH project
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 *
 * @version    0.1
 * @author     Stefan Krenz <krenz@marmalade.de>
 * @link       http://www.marmalade.de
 */

namespace Marm\Yamm;

class DICBuilder
{
    /**
     * @var DIC
     */
    private static $container;

    /**
     * @param string[] $dicFiles
     *
     * @return DIC
     */
    public static function getContainer(array $dicFiles = [])
    {
        if (null === self::$container) {
            self::$container = new DIC();
            $dic = self::$container;

            foreach ($dicFiles as $dicFile) {
                include $dicFile;
            }
        }

        return self::$container;
    }

    /**
     * @param string $moduleDirectory Path to the directory, where modules are located.
     *
     * @return string[] List of "dic.php" files, which have to be added to the container.
     */
    public static function findDICFiles($moduleDirectory)
    {
        $directoryIterator = new \RecursiveDirectoryIterator($moduleDirectory);
        $recursiveIterator = new \RecursiveIteratorIterator($directoryIterator);
        $recursiveIterator->setMaxDepth(2);
        $filterIterator    = new MetadataFilterIterator($recursiveIterator);

        $filesToAdd = array_map(
            function ($element) {
                /** @var $element \SplFileInfo */
                return dirname($element->getRealPath()) . "/dic.php";
            },
            iterator_to_array($filterIterator)
        );

        return array_values($filesToAdd);
    }
}
