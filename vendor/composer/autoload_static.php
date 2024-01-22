<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit422a43e515298dbb943e8cb24ea90e53
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpQrCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/nmiles/phpqrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit422a43e515298dbb943e8cb24ea90e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit422a43e515298dbb943e8cb24ea90e53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit422a43e515298dbb943e8cb24ea90e53::$classMap;

        }, null, ClassLoader::class);
    }
}
