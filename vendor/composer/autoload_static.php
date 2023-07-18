<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6e5c066311f7372cc0678f9301d5a86
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Home\\ShoppingCart\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Home\\ShoppingCart\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite6e5c066311f7372cc0678f9301d5a86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6e5c066311f7372cc0678f9301d5a86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6e5c066311f7372cc0678f9301d5a86::$classMap;

        }, null, ClassLoader::class);
    }
}