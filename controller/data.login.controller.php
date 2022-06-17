<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];



if (empty($email) || empty($password)) {

    die("email and password field should't be empty");

} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    die('Invalid email format!');
    
} else {

    $userData = $app['database']->searchUserEmail('registration');
    $adminData = $app['database']->searchAdminEmail('registration');

    if ($userData) {

        foreach ($userData as $d) {

            $db_password = $d['password'];

            $pass_decode = password_verify($password, $db_password);

            if ($pass_decode) {

                $_SESSION['username'] = $d['username'];
                $_SESSION['id'] = $d['id'];
                header('Location: views/userLandingpage.php?id='.$_SESSION['id']);

                // echo "login successful!";

            } else {

                die('Password Incorrect');
            }
        }
    } elseif ($adminData) {

        foreach ($adminData as $d) {

            $db_password = $d['password'];

            $pass_decode = password_verify($password, $db_password);

            if ($pass_decode) {

                $_SESSION['username'] = $d['username'];
                $_SESSION['id'] = $d['id'];
                header('Location: views/adminLandingpage.php?id='.$_SESSION['id']);

                // echo "login successful!";

            } else {

                die('Password Incorrect');
            }
        }
    } else {

        die('Incorrect email!');
    }
}
