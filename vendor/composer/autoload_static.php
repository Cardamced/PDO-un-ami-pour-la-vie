<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5241f068bf3a67ad7afb60268252805d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cedrickmarie\\Pdo\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cedrickmarie\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5241f068bf3a67ad7afb60268252805d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5241f068bf3a67ad7afb60268252805d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5241f068bf3a67ad7afb60268252805d::$classMap;

        }, null, ClassLoader::class);
    }
}