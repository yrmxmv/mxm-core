<?php
namespace MXM\core\Autoload;

class Autoloader
{
    protected static $autoloader;

    public static function register(AutoloaderInterface $autoloader)
    {
        self::$autoloader = $autoloader;
    }

    public static function getAutoloader()
    {
        if (self::$autoloader !== null) {
            return self::$autoloader;
        } else {
            throw new \Exception('Autoloader is not registered.');
        }
    }
}