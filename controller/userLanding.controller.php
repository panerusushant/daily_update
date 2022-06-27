<?php
session_start();

$posts =  $app['database']->listAllPost( $_SESSION['id']);

require "views/userLanding.php";