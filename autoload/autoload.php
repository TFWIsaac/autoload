<?php

function autoload($className)
{
    $prefix = "Imglol";
    $dir = "./classes";

    $class = substr($className, strlen($prefix));
    $class = str_replace("\\", "/", $class);

    if (file_exists("{$dir}{$class}.php")) {
        require_once "{$dir}{$class}.php";
    }
}
spl_autoload_register("autoload");


