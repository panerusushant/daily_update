<?php

if(empty($_POST['date']) || empty($_POST['daily_update'])){
    die('All field should be filled!');
}else{
$app['database'] ->createPost('post', [
    'user_id' => $_REQUEST['user_id'],
    'daily_update' => $_REQUEST['daily_update'],
    'created_date' => $_REQUEST['date'] 
]);

header('Location: views/userLandingpage.php');
}



