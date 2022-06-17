<?php
// require "database/connection.php";
// require "database/getAllQuery.php";

 require "core/bootstrap.php"; 

// $pdo = connection::connect();
// $query = new QueryBuilder(($pdo));

//   $router = new Router;


// require 'routes.php';



// require $router->direct('');
// $router =  Router::load('routes.php');

// require $router->direct($uri);
   
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());