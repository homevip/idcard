<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5788f5d039d555235ca6fb952a2c73c0
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'homevip\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'homevip\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5788f5d039d555235ca6fb952a2c73c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5788f5d039d555235ca6fb952a2c73c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
