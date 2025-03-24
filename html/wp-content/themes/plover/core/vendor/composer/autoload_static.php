<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63e561d450393276e1767bfeaf448511
{
    public static $files = array (
        '76e4e0453b31de80bf7bc104ce48f9c3' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'P' => 
        array (
            'Plover\\Core\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Plover\\Core\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63e561d450393276e1767bfeaf448511::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63e561d450393276e1767bfeaf448511::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63e561d450393276e1767bfeaf448511::$classMap;

        }, null, ClassLoader::class);
    }
}
