<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1d424ba4ea087b96723468a6f0c5b3b
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1d424ba4ea087b96723468a6f0c5b3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1d424ba4ea087b96723468a6f0c5b3b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}