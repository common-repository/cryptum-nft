<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1227a4dc0a04676288c5066897560e5
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'C' => 
        array (
            'Cryptum\\NFT\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/keccak/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Cryptum\\NFT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Cryptum\\NFT\\Admin\\AdminSettings' => __DIR__ . '/../..' . '/src/Admin/AdminSettings.php',
        'Cryptum\\NFT\\Admin\\OrderSettings' => __DIR__ . '/../..' . '/src/Admin/OrderSettings.php',
        'Cryptum\\NFT\\Admin\\ProductEditPage' => __DIR__ . '/../..' . '/src/Admin/ProductEditPage.php',
        'Cryptum\\NFT\\CheckoutPage' => __DIR__ . '/../..' . '/src/CheckoutPage.php',
        'Cryptum\\NFT\\PluginInit' => __DIR__ . '/../..' . '/src/PluginInit.php',
        'Cryptum\\NFT\\ProductInfoPage' => __DIR__ . '/../..' . '/src/ProductInfoPage.php',
        'Cryptum\\NFT\\Utils\\AddressValidator' => __DIR__ . '/../..' . '/src/Utils/AddressValidator.php',
        'Cryptum\\NFT\\Utils\\Api' => __DIR__ . '/../..' . '/src/Utils/Api.php',
        'Cryptum\\NFT\\Utils\\Blockchain' => __DIR__ . '/../..' . '/src/Utils/Blockchain.php',
        'Cryptum\\NFT\\Utils\\Db' => __DIR__ . '/../..' . '/src/Utils/Db.php',
        'Cryptum\\NFT\\Utils\\Log' => __DIR__ . '/../..' . '/src/Utils/Log.php',
        'Cryptum\\NFT\\Utils\\Misc' => __DIR__ . '/../..' . '/src/Utils/Misc.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'kornrunner\\Keccak' => __DIR__ . '/..' . '/kornrunner/keccak/src/Keccak.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1227a4dc0a04676288c5066897560e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1227a4dc0a04676288c5066897560e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1227a4dc0a04676288c5066897560e5::$classMap;

        }, null, ClassLoader::class);
    }
}
