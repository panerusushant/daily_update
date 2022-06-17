<?php

class Request{

    public static function uri()

    {
            // var_dump($_SERVER['REQUEST_URI'],PHP_URL_PATH);

           return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');


        // return $uri = trim($_SERVER['REQUEST_URI'], '/');

    }



    public static function method(){

        return $_SERVER['REQUEST_METHOD'];

    }
}