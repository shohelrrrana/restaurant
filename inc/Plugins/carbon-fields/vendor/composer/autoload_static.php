<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbdbdeb58014af4fcc420ed493b6ddd5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbdbdeb58014af4fcc420ed493b6ddd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbdbdeb58014af4fcc420ed493b6ddd5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
