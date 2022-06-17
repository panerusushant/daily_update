<?php


class Router{

    public $routes = [
        'GET' => [],
        'POST' => [], 
        'PUT' => [],
        'DELETE' => []

    ];


    public static function load($file){

        $router = new static;

        require $file;
        
        return $router;
    }

    


    public function get($uri, $controller){

        $this ->routes['GET'][$uri] =$controller;

    }


    public function post($uri, $controller){

        $this ->routes['POST'][$uri] =$controller;

    }


    public function delete($uri, $controller){

        $this ->routes['DELETE'][$uri] =$controller;

    }


    public function direct($uri, $RequestType){

       if( array_key_exists($uri, $this->routes[$RequestType])){

           return $this->routes[$RequestType][$uri];
       }

       throw new Exception("No routes defined");

    }
    
}