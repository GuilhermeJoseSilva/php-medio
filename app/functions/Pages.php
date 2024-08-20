<?php

    function load(){
        $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);


        $page = (!$page) ? 'public/pages/Home.php' : "public/pages/{$page}.php";

        if(!file_exists($page)){
            throw new \Exception("Opa alguma coisa errada aconteceu");
        }
        
        return $page;
    }