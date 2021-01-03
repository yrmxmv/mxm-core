<?php
namespace MXM\core\Autoload;

use Composer\Autoload\ClassLoader;

class Loader implements AutoloaderInterface
{
    protected $autoloader;

    public function __construct(ClassLoader $autoloader)
    {
        $this->autoloader = $autoloader;
    }

    public function addPsr4($nsPrefix, $paths, $prepend = false)
    {
        $this->autoloader->addPsr4($nsPrefix, $paths, $prepend);
    }

    public function addPsr0($nsPrefix, $paths, $prepend = false)
    {
        $this->autoloader->add($nsPrefix, $paths, $prepend);
    }

    public function setPsr0($nsPrefix, $paths)
    {
        $this->autoloader->set($nsPrefix, $paths);
    }

    public function setPsr4($nsPrefix, $paths)
    {
        $this->autoloader->setPsr4($nsPrefix, $paths);
    }

    public function loadClass($className)
    {
        return $this->autoloader->loadClass($className) === true;
    }

    public function findFile($className)
    {
        if ($className[0] === '\\') {
            $className = substr($className, 1);
        }
        $this->autoloader->addClassMap([$className => null]);
        return $this->autoloader->findFile($className);
    }
}