<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit937c3f1c94a160339d3cc43c1ca25020
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit937c3f1c94a160339d3cc43c1ca25020::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit937c3f1c94a160339d3cc43c1ca25020::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
