<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab70fa82613bf19c3e1532ee8256d00a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitab70fa82613bf19c3e1532ee8256d00a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab70fa82613bf19c3e1532ee8256d00a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab70fa82613bf19c3e1532ee8256d00a::$classMap;

        }, null, ClassLoader::class);
    }
}
