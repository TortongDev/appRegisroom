<?php
    spl_autoload_register('loadclass');
    function loadclass($class){
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
?>