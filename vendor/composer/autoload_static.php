<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4a2b5abfe39e99dad4f556090c49efc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4a2b5abfe39e99dad4f556090c49efc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4a2b5abfe39e99dad4f556090c49efc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4a2b5abfe39e99dad4f556090c49efc::$classMap;

        }, null, ClassLoader::class);
    }
}
