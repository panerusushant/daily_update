<?php

$app = [];
$app['config'] = require 'config.php';


// var_dump($app);
require 'core/Router.php'; 
require 'core/Request.php';
require "core/database/connection.php";
require "core/database/getAllQuery.php";
require "utils/password.hash.php";

//initialize of connection calss an access of connect function 
$pdo = connection::connect($app['config']['database']);

//initialize of QueruBuilder class
$app['database'] =  new QueryBuilder(($pdo));