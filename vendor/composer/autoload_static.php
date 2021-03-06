<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a9b62a1f0cb8277c9e617384e611b5a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bryanjamesdelaluya\\ExchangeRatesAPI\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bryanjamesdelaluya\\ExchangeRatesAPI\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a9b62a1f0cb8277c9e617384e611b5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a9b62a1f0cb8277c9e617384e611b5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a9b62a1f0cb8277c9e617384e611b5a::$classMap;

        }, null, ClassLoader::class);
    }
}
