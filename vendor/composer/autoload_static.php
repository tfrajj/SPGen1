<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f38831c9db9ea123bb9280ff004b2c1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SPGen1\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SPGen1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f38831c9db9ea123bb9280ff004b2c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f38831c9db9ea123bb9280ff004b2c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f38831c9db9ea123bb9280ff004b2c1::$classMap;

        }, null, ClassLoader::class);
    }
}
