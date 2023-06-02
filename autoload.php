<?php
    spl_autoload_register('loadclass');
    function loadclass($class){
        $pathAll = array(
            "./class",
            "../class",
            "../../class"
        );   
        foreach ($pathAll as $key => $value) {
            if(file_exists($value)):
                $path = "{$value}/{$class}.php";
                require_once "{$path}";
            endif;
        }
    }
?>