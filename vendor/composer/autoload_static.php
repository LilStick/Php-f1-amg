<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit171073274f71c8c5940fbf1bbb7069e7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit171073274f71c8c5940fbf1bbb7069e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit171073274f71c8c5940fbf1bbb7069e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit171073274f71c8c5940fbf1bbb7069e7::$classMap;

        }, null, ClassLoader::class);
    }
}
