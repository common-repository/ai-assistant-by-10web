<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4772ca5e3ea9a0a71c28d19c592578a
{
    public static $files = array (
        'a35f8ffd39a08e1034cb8d27a4443d4d' => __DIR__ . '/..' . '/10web/authorization/src/config/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tenweb_Authorization\\' => 21,
        ),
        'A' => 
        array (
            'AIAssistantTenWeb\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tenweb_Authorization\\' => 
        array (
            0 => __DIR__ . '/..' . '/10web/authorization/src',
        ),
        'AIAssistantTenWeb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'AIAssistantTenWeb\\Library' => __DIR__ . '/../..' . '/includes/Library.php',
        'AIAssistantTenWeb\\RestApi' => __DIR__ . '/../..' . '/includes/RestApi.php',
        'AIAssistantTenWeb\\TenWebApi' => __DIR__ . '/../..' . '/includes/TenWebApi.php',
        'AIAssistantTenWeb\\Utils' => __DIR__ . '/../..' . '/includes/Utils.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tenweb_Authorization\\Amazon' => __DIR__ . '/..' . '/10web/authorization/src/Amazon.php',
        'Tenweb_Authorization\\Helper' => __DIR__ . '/..' . '/10web/authorization/src/Helper.php',
        'Tenweb_Authorization\\InstalledPlugin' => __DIR__ . '/..' . '/10web/authorization/src/InstalledPlugin.php',
        'Tenweb_Authorization\\InstalledTheme' => __DIR__ . '/..' . '/10web/authorization/src/InstalledTheme.php',
        'Tenweb_Authorization\\Login' => __DIR__ . '/..' . '/10web/authorization/src/Login.php',
        'Tenweb_Authorization\\Product' => __DIR__ . '/..' . '/10web/authorization/src/Product.php',
        'Tenweb_Authorization\\ProductActions' => __DIR__ . '/..' . '/10web/authorization/src/ProductActions.php',
        'Tenweb_Authorization\\ProductState' => __DIR__ . '/..' . '/10web/authorization/src/ProductState.php',
        'Tenweb_Authorization\\WpAjaxUpgraderSkin' => __DIR__ . '/..' . '/10web/authorization/src/WpAjaxUpgraderSkin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4772ca5e3ea9a0a71c28d19c592578a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4772ca5e3ea9a0a71c28d19c592578a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4772ca5e3ea9a0a71c28d19c592578a::$classMap;

        }, null, ClassLoader::class);
    }
}