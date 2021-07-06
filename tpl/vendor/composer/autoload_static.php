<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f606a3e0bbb6725fcd988073df27d61
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f606a3e0bbb6725fcd988073df27d61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f606a3e0bbb6725fcd988073df27d61::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0f606a3e0bbb6725fcd988073df27d61::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0f606a3e0bbb6725fcd988073df27d61::$classMap;

        }, null, ClassLoader::class);
    }
}
