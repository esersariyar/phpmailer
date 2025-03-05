<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e02cd372987a222c89d70ba84b5b58b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e02cd372987a222c89d70ba84b5b58b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e02cd372987a222c89d70ba84b5b58b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
