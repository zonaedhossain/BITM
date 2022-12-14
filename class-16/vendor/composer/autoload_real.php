<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite44c58931cff4bf64979dd11ee15cd0b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite44c58931cff4bf64979dd11ee15cd0b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite44c58931cff4bf64979dd11ee15cd0b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite44c58931cff4bf64979dd11ee15cd0b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
