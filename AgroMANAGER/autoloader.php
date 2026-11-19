<?php
//spl_autoload_register(
//    ?callable $callback = NULL, //callable - анонимная функция
//    bool $throw = true
//    bool $prepend = false
//
//): bool

// Функция автозагрущзчик принимает аргумент которая имеел полное имя класса зависимости, а это пространство имён плюс имя файла с его расширением
// задача - опредеить существование файла,
// алгорит - построение namespace и подключение самого файла через requereonce

//spl_autoload_register(function ($className) {
//    $file = __DIR__ . "/classes/" . $className . ".php";
//    if(file_exists($file)) {
//        require_once $file;
//    }
//}, true, true);

spl_autoload_register(function($class){
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

