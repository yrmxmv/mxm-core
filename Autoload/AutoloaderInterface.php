<?php
namespace MXM\core\Autoload;

interface AutoloaderInterface
{
    public function addPsr4($nsPrefix, $paths, $prepend = false);

    public function setPsr4($nsPrefix, $paths);

    public function addPsr0($nsPrefix, $paths, $prepend = false);

    public function setPsr0($nsPrefix, $paths);

    public function loadClass($className);

    public function findFile($className);
}