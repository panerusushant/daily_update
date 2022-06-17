<?php

 //Router object

// $router->define([
//     '' => 'controller/home.controller.php',
    
//     'create' =>'controller/post.controller.php'

// ]);



$router -> get('', 'controller/home.controller.php');

$router -> post('create', 'controller/data.post.controller.php');

$router -> post('login', 'controller/data.login.controller.php');
// $router -> get('home', 'controller/landingpage.controller.php');
$router -> post('daily-update', 'controller/daily.update.controller.php');

// $router -> get('views/userLandingpage.php', 'controller/userLandingpage.controller.php');



