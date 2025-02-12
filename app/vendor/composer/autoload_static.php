<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdbf34b9944a7abd3eceb56cc305c687
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Views\\' => 10,
            'App\\Services\\' => 13,
            'App\\Repositories\\' => 17,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'App\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'App\\Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/repositories',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Steampixel' => 
            array (
                0 => __DIR__ . '/..' . '/steampixel/simple-php-router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdbf34b9944a7abd3eceb56cc305c687::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdbf34b9944a7abd3eceb56cc305c687::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfdbf34b9944a7abd3eceb56cc305c687::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfdbf34b9944a7abd3eceb56cc305c687::$classMap;

        }, null, ClassLoader::class);
    }
}
