<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc821d8be3377022faa2730b83db22158
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

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/app/Config.php',
        'App\\SQLiteConnection' => __DIR__ . '/../..' . '/app/SQLiteConnection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc821d8be3377022faa2730b83db22158::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc821d8be3377022faa2730b83db22158::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc821d8be3377022faa2730b83db22158::$classMap;

        }, null, ClassLoader::class);
    }
}