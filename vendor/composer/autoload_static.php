<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6ac34b8acf2e27e323b63741d45e442
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'XcsDorker\\' => 11,
        ),
        'H' => 
        array (
            'HttpRequest\\' => 12,
        ),
        'C' => 
        array (
            'Colors\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XcsDorker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'HttpRequest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'Colors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Colors\\Color' => __DIR__ . '/../..' . '/App/Colors/Color.php',
        'Colors\\Exception' => __DIR__ . '/../..' . '/App/Colors/Exception.php',
        'Colors\\InvalidStyleNameException' => __DIR__ . '/../..' . '/App/Colors/InvalidStyleNameException.php',
        'Colors\\NoStyleFoundException' => __DIR__ . '/../..' . '/App/Colors/NoStyleFoundException.php',
        'Colors\\RecursionInUserStylesException' => __DIR__ . '/../..' . '/App/Colors/RecursionInUserStylesException.php',
        'HttpRequest\\Main' => __DIR__ . '/../..' . '/App/HttpRequest/Main.php',
        'HttpRequest\\UAgent' => __DIR__ . '/../..' . '/App/HttpRequest/UAgent.php',
        'HttpRequest\\interfaceHttpRequest' => __DIR__ . '/../..' . '/App/HttpRequest/Main.php',
        'XcsDorker\\DorkerInterface' => __DIR__ . '/../..' . '/App/XcsDorker/DorkerInterface.php',
        'XcsDorker\\Main' => __DIR__ . '/../..' . '/App/XcsDorker/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6ac34b8acf2e27e323b63741d45e442::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6ac34b8acf2e27e323b63741d45e442::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6ac34b8acf2e27e323b63741d45e442::$classMap;

        }, null, ClassLoader::class);
    }
}
