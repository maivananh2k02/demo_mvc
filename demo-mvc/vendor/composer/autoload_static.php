<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit066f0d1079f6a62b0a9737cf98c20160
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit066f0d1079f6a62b0a9737cf98c20160::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit066f0d1079f6a62b0a9737cf98c20160::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
