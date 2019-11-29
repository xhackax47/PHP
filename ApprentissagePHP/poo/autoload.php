<?php

// spl_autoload_register("nomDeLaFonction");
spl_autoload_register(function($className)
{
    $className = str_replace('\\', "/", $className);
    $className = $className . ".php";
    $className = lcfirst($className);

    require_once ($className);
});