<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ea3c664438befa803b49c9fcc522205
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Genesis\\Blocks\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Genesis\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Genesis\\Blocks\\BlockLoader\\ManualRequire' => __DIR__ . '/../..' . '/lib/BlockLoader/ManualRequire.php',
        'Genesis\\Blocks\\BlockLoader\\Module' => __DIR__ . '/../..' . '/lib/BlockLoader/Module.php',
        'Genesis\\Blocks\\BlockLoader\\Tests\\ManualRequireTest' => __DIR__ . '/../..' . '/lib/BlockLoader/Tests/ManualRequireTest.php',
        'Genesis\\Blocks\\Interfaces\\ModuleInterface' => __DIR__ . '/../..' . '/lib/Interfaces/ModuleInterface.php',
        'Genesis\\Blocks\\Migration\\Admin' => __DIR__ . '/../..' . '/lib/Migration/Admin.php',
        'Genesis\\Blocks\\Migration\\AdminNotice' => __DIR__ . '/../..' . '/lib/Migration/AdminNotice.php',
        'Genesis\\Blocks\\Migration\\Api' => __DIR__ . '/../..' . '/lib/Migration/Api.php',
        'Genesis\\Blocks\\Migration\\Module' => __DIR__ . '/../..' . '/lib/Migration/Module.php',
        'Genesis\\Blocks\\Migration\\PostContent' => __DIR__ . '/../..' . '/lib/Migration/PostContent.php',
        'Genesis\\Blocks\\Migration\\Setting' => __DIR__ . '/../..' . '/lib/Migration/Setting.php',
        'Genesis\\Blocks\\Migration\\Tests\\ApiTest' => __DIR__ . '/../..' . '/lib/Migration/Tests/ApiTest.php',
        'Genesis\\Blocks\\Migration\\Tests\\PostContentTest' => __DIR__ . '/../..' . '/lib/Migration/Tests/PostContentTest.php',
        'Genesis\\Blocks\\Migration\\Tests\\SettingTest' => __DIR__ . '/../..' . '/lib/Migration/Tests/SettingTest.php',
        'Genesis\\Blocks\\Migration\\Tests\\UserMetaTest' => __DIR__ . '/../..' . '/lib/Migration/Tests/UserMetaTest.php',
        'Genesis\\Blocks\\Migration\\UserMeta' => __DIR__ . '/../..' . '/lib/Migration/UserMeta.php',
        'Genesis\\Blocks\\ModuleLoader' => __DIR__ . '/../..' . '/lib/ModuleLoader.php',
        'Genesis\\Blocks\\PluginLoader' => __DIR__ . '/../..' . '/lib/PluginLoader.php',
        'Genesis\\Blocks\\Settings\\AdminPage' => __DIR__ . '/../..' . '/lib/Settings/AdminPage.php',
        'Genesis\\Blocks\\Settings\\Module' => __DIR__ . '/../..' . '/lib/Settings/Module.php',
        'Genesis\\Blocks\\Settings\\Tests\\AdminPageTest' => __DIR__ . '/../..' . '/lib/Settings/Tests/AdminPageTest.php',
        'Genesis\\Blocks\\Traits\\DetectPluginsTrait' => __DIR__ . '/../..' . '/lib/Traits/DetectPluginsTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ea3c664438befa803b49c9fcc522205::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ea3c664438befa803b49c9fcc522205::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ea3c664438befa803b49c9fcc522205::$classMap;

        }, null, ClassLoader::class);
    }
}
