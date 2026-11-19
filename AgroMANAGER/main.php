<?php

namespace main;

use Physicals\Physical;
use Biologicals\Animals\Cow;

spl_autoload_register(function ($class) {
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$dir = __DIR__;
$entityDir = $dir . '/Entity.php';
$PhysicalDir = $dir . '/Physicals/Physical.php';

if (file_exists($entityDir)) {
    require_once $entityDir;
    echo "Файл '" . $entityDir . "' подключен" . PHP_EOL;
}

if (file_exists($PhysicalDir)) {
    require_once $PhysicalDir;
    echo "Файл '" . $PhysicalDir . "' подключен" . PHP_EOL;
}

$Murka = new Cow("3", "Мурка", 90.123);
print_r($Murka);

$physical = new Physical("1", "Молоток");
print_r($physical);
