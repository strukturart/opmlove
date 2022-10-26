<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b39defdc83f84f157d357f73e75e51a
{
    public static $files = array (
        '5f6ea78188a74ae6f96fa6029143ab5a' => __DIR__ . '/..' . '/servo/fluidxml/source/FluidXml/fluid.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FluidXml\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FluidXml\\' => 
        array (
            0 => __DIR__ . '/..' . '/servo/fluidxml/source/FluidXml',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b39defdc83f84f157d357f73e75e51a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b39defdc83f84f157d357f73e75e51a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b39defdc83f84f157d357f73e75e51a::$classMap;

        }, null, ClassLoader::class);
    }
}