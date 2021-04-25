<?php
   include 'connection.php';
    session_start();
    if(!isset($_SESSION["emailid"])) {
        header("Location: login.php");
        exit();
    }
?>