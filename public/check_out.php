<?php 
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $_SESSION['isCheckOut'] = false;
    if (isset($_SESSION['user'])) {
        include_once './view/_checkout.php'; 
    }else { 
        $_SESSION['isCheckOut'] = true;
        include_once './view/_login.php';
    }
}
?>