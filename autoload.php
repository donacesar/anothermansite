<?php

function __autoload(string $class)
{
    $path = __DIR__ . '/classes/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $path;
}
