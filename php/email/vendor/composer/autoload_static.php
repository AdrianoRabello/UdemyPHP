<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac2f9d0c58a0a37550906321193af553
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac2f9d0c58a0a37550906321193af553::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac2f9d0c58a0a37550906321193af553::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
