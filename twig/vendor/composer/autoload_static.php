<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a897b1e0e036cc185890067ce959c66
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'F' => 
        array (
            'Fxp\\Composer\\AssetPlugin\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Fxp\\Composer\\AssetPlugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/fxp/composer-asset-plugin',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a897b1e0e036cc185890067ce959c66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a897b1e0e036cc185890067ce959c66::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9a897b1e0e036cc185890067ce959c66::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
