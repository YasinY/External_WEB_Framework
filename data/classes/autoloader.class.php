<?php

class AutoLoader
{

    function load() {
        spl_autoload_register(function ($class) {
            $class = strtolower($class);
            if ($class == "identifiers") {
                include $class . '.interface.php';
            } else { //So no return is needed
                include $class . '.class.php';
            }
        });
    }

}