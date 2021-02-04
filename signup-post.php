<?php
include 'data/database.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirmPass = $_POST['confirm_password'];
    $role = 'CUSTOMER';
    
    if ($pass === $confirmPass) {
        $query = "INSERT INTO `users`  (`name`, `email`, `password`,`role`) VALUES ('$name', '$email', '$pass', '$role')";

        $database = new Database();
        $result = $database->insert($query);
        if ($result === true) {
            session_start();
            $_SESSION['user'] = $_POST;
            $_SESSION['user']['id'] = $database->getLastId();
            header('Location: index.php');
        } else {
            header('Location: SIGNUP.php?err=Email%20is%20already%20registered%20please%20login');
        }
    }
    else{
        header("Location: signup.php?err=Confirm%20password%20is%20incorrect");
    }

}
else{
    header("Location: signup.php");
}