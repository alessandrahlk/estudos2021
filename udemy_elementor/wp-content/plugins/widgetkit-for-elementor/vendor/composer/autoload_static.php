<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33a2a812429ec5d2b169306732ec8cd6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33a2a812429ec5d2b169306732ec8cd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33a2a812429ec5d2b169306732ec8cd6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit33a2a812429ec5d2b169306732ec8cd6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
