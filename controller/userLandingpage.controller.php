<?php
session_start();

$data = $app['database'] ->selectPost('post', $_REQUEST['id']);


require "views/userLandingpage.php";