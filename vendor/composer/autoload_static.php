<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14c7858b8898749a8f8656204b327312
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Terada\\Ipt\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Terada\\Ipt\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit14c7858b8898749a8f8656204b327312::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14c7858b8898749a8f8656204b327312::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14c7858b8898749a8f8656204b327312::$classMap;

        }, null, ClassLoader::class);
    }
}
