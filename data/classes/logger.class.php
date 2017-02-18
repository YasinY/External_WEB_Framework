<?php

class Logger
{


    public static final function log_message($message)
    {
        echo '<pre style="text-shadow: 1px 1px gray; color:darkgray">';

        if(is_array($message)) {
            foreach($message as $value) {
                echo 'LOGGER: ' . $value . PHP_EOL;
            }
        } else {
            echo 'LOGGER: ' . $message . PHP_EOL;
        }
            echo '</pre>';
    }


    public static final function log_error($message)
    {
        echo '<pre style="text-shadow: 1px 1px red; color:black;">';
        echo 'ERROR: ' . $message . PHP_EOL;
        echo '</pre>';
    }

    public static final function log_warning($message)
    {
        echo '<pre style="text-shadow: 1px 1px yellow; color:black;">';
        echo 'WARNING: ' . $message . PHP_EOL;
        echo '</pre>';

    }
}