<?php
session_start();
$_SESSION['cartItems'] = [];
unset($_SESSION["user"]);
header("Location: signin.php");
