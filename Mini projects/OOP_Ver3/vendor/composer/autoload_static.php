<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f214da629689c80ea5d4422251e3f0c
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app/code',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller\\Admin' => __DIR__ . '/../..' . '/app/code/Controller/Admin.php',
        'Controller\\Catalog' => __DIR__ . '/../..' . '/app/code/Controller/Catalog.php',
        'Controller\\Error' => __DIR__ . '/../..' . '/app/code/Controller/Error.php',
        'Controller\\Home' => __DIR__ . '/../..' . '/app/code/Controller/Home.php',
        'Controller\\User' => __DIR__ . '/../..' . '/app/code/Controller/User.php',
        'Core\\AbstractController' => __DIR__ . '/../..' . '/app/code/Core/AbstractController.php',
        'Core\\AbstractModel' => __DIR__ . '/../..' . '/app/code/Core/AbstractModel.php',
        'Core\\Interfaces\\ControllerInterface' => __DIR__ . '/../..' . '/app/code/Core/Interfaces/ControllerInterface.php',
        'Core\\Interfaces\\ModelInterface' => __DIR__ . '/../..' . '/app/code/Core/Interfaces/ModelInterface.php',
        'Helper\\DBHelper' => __DIR__ . '/../..' . '/app/code/Helper/DBHelper.php',
        'Helper\\FormHelper' => __DIR__ . '/../..' . '/app/code/Helper/FormHelper.php',
        'Helper\\Logger' => __DIR__ . '/../..' . '/app/code/Helper/Logger.php',
        'Helper\\Url' => __DIR__ . '/../..' . '/app/code/Helper/Url.php',
        'Helper\\Validator' => __DIR__ . '/../..' . '/app/code/Helper/Validator.php',
        'Model\\Ad' => __DIR__ . '/../..' . '/app/code/Model/Ad.php',
        'Model\\City' => __DIR__ . '/../..' . '/app/code/Model/City.php',
        'Model\\User' => __DIR__ . '/../..' . '/app/code/Model/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit5f214da629689c80ea5d4422251e3f0c::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit5f214da629689c80ea5d4422251e3f0c::$classMap;

        }, null, ClassLoader::class);
    }
}
