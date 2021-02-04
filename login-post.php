
<?php
include_once './data/database.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $database = new Database();
    $query = "SELECT * FROM `users` where `password` = '{$_POST['password']}' and email = '{$_POST['email']}'";
    $customers = $database->query($query);
    $database->close();

    if (count($customers) === 1) {
        session_start();
        $_SESSION['user'] = $customers[0];
        header("Location: index.php");
    } else {
        header('Location: signin.php?err=Incorrect%20your%20email%20OR%20password');
    }
}