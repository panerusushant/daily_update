<?php


$data = $app['database'] ->SelectAll('registration');

if($data){
    
    die('Email already exist');

}elseif(empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST['password']) || empty($_POST['department']))  {  

     die("All field's are required") ;

}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    die('Invalid email format!');
}
else{

$hashPassword = new Hash($_POST['password']);

$password= $hashPassword->hashPassword();

$app['database'] ->createUser('registration', [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => $password,
    'role' => 'user',
    'department_id' => intval($_POST['department'])
    
]);

  header('Location: views/adminLandingpage.php');

}








