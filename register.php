<?php
session_start();

error_reporting(-1);

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once 'db.php';


if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


    $result = mysqli_query($db, "SELECT email from users WHERE email = '$email' LIMIT 1");
    if(mysqli_num_rows($result) == 1) {

        $_SESSION['flash'] = 'такая почта существует !!!!';
        header ("location: page_register.php");
    }
    else
    {
        $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
        mysqli_query($db,$query) or die(mysqli_error($db));
        $_SESSION['flash'] = 'Вы зарегистрировались!';
        header ("location: page_login.php");
    }



}