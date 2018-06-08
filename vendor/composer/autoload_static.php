<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbee5c02d239532a04767203313faf56f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Marmalade\\Yamm\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Marmalade\\Yamm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/oxid/core',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Marm\\Yamm\\DIC' => __DIR__ . '/../..' . '/src/Yamm/DIC.php',
        'Marm\\Yamm\\DICBuilder' => __DIR__ . '/../..' . '/src/Yamm/DICBuilder.php',
        'Marm\\Yamm\\MetadataFilterIterator' => __DIR__ . '/../..' . '/src/Yamm/MetadataFilterIterator.php',
        'Marmalade\\Yamm\\Config' => __DIR__ . '/../..' . '/src/oxid/core/Config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbee5c02d239532a04767203313faf56f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbee5c02d239532a04767203313faf56f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbee5c02d239532a04767203313faf56f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbee5c02d239532a04767203313faf56f::$classMap;

        }, null, ClassLoader::class);
    }
}
