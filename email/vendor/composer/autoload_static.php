<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01583a2367a9ce55fc9ac931b94bb1ed
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01583a2367a9ce55fc9ac931b94bb1ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01583a2367a9ce55fc9ac931b94bb1ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01583a2367a9ce55fc9ac931b94bb1ed::$classMap;

        }, null, ClassLoader::class);
    }
}
