<?php

session_start();

include_once 'is_login.php';

if (!is_auth()) {
    header ("Location: auth.php");
    exit();
}

$name = $_GET['id'];
unlink("data/$name");
header('Location: post.php');
exit();


?>