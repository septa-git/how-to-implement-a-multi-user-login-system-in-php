<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb5ad8e7caf79a5961f24e1d0c760a6c5
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb5ad8e7caf79a5961f24e1d0c760a6c5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb5ad8e7caf79a5961f24e1d0c760a6c5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb5ad8e7caf79a5961f24e1d0c760a6c5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
