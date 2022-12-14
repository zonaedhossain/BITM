<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite44c58931cff4bf64979dd11ee15cd0b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Class16\\Class16\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Class16\\Class16\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite44c58931cff4bf64979dd11ee15cd0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite44c58931cff4bf64979dd11ee15cd0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite44c58931cff4bf64979dd11ee15cd0b::$classMap;

        }, null, ClassLoader::class);
    }
}
