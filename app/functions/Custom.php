<?php

    function request(){
        $request = $_SERVER['REQUEST_METHOD'];

        if($request == 'POST'){
            return $_POST;
        }

        return $_GET;
    }

    function dd($dump){
        var_dump($dump);
        die();
    }

    function redirect($target){
        return header("Location:/?page={$target}");
    }

    function redirectToHome(){
        return header("Location:/");
    }