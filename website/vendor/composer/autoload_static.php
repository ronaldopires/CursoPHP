<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ceaa4a31eed2a861f1af42769d43e20
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0ceaa4a31eed2a861f1af42769d43e20::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0ceaa4a31eed2a861f1af42769d43e20::$classMap;

        }, null, ClassLoader::class);
    }
}
