<?php
session_start();
if(!isset($auth)){
    if(!isset($_SESSION['Auth']['id'])){
        header('location:login.php');
        die();
    }
}

?>    
    