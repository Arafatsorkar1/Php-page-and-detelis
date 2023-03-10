<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef99b74b1a6734af6c02bf740e6b9a9a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef99b74b1a6734af6c02bf740e6b9a9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef99b74b1a6734af6c02bf740e6b9a9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef99b74b1a6734af6c02bf740e6b9a9a::$classMap;

        }, null, ClassLoader::class);
    }
}
