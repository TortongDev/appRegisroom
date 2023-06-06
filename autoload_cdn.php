<?php

    function autoload_cdn(){
        $pathAll = array(
            "./node_modules/bootstrap/dist/css",
            "./public",
            "./public/css",
            "./public/js",
            "../public",
            "../public/css",
            "../../public",
            "../public/js",
            "../../public/css",
            "../../public/js"
        );   
        foreach ($pathAll as $key => $value) {
            $path = "{$value}/cdn.php";
            if(file_exists($path)):
                require_once "{$path}";
            endif;
        }
    }
    autoload_cdn();
?>