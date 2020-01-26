<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8ab54aed42c8f56d76cb5d5c97f1290
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8ab54aed42c8f56d76cb5d5c97f1290::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8ab54aed42c8f56d76cb5d5c97f1290::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
