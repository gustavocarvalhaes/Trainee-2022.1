<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77d18dcc81140e6fe6e1cf916f541701
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\ExampleController' => __DIR__ . '/../..' . '/app/Controllers/ExampleController.php',
        'App\\Controllers\\UsuariosController' => __DIR__ . '/../..' . '/app/Controllers/usuariosController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit77d18dcc81140e6fe6e1cf916f541701' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit77d18dcc81140e6fe6e1cf916f541701' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit77d18dcc81140e6fe6e1cf916f541701::$classMap;

        }, null, ClassLoader::class);
    }
}
