<?php

    function autoload_cdn(){
        $pathAll = array(
            "./node_modules/bootstrap/dist/css",
            "./public/css",
            "./public/js",
            "../public/css",
            "../public/js",
            "../../public/css",
            "../../public/js",
        );   
        foreach ($pathAll as $key => $value) {
            if(file_exists($value)):
                $path = "{$value}/cdn.php";
                require_once "{$path}";
            endif;
        }
    }
    autoload_cdn();
?>