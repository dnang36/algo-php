<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit620d2fdc671c7cdec81010652c0db346
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'algo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'algo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit620d2fdc671c7cdec81010652c0db346::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit620d2fdc671c7cdec81010652c0db346::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit620d2fdc671c7cdec81010652c0db346::$classMap;

        }, null, ClassLoader::class);
    }
}
