<?php
include_once '../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isLoginSuccess = true;
    if (($_POST['email']) && $_POST['password']) {
        $user = login($_POST['email'], $_POST['password']);

        if ($user == false) {
            $_SESSION['flash_message'] = 'Your account name or Password is incorrect, please try again';
            $isLoginSuccess = false;
        }else {
            $_SESSION['user'] = $user;
        }
    }

    if ($isLoginSuccess) {
        if(isset($_SESSION['user']) && $_SESSION['isCheckOut']) {
            header('Location: check_out.php');
        }else{
            header('Location: index.php');
        }
    }else {
        header('Location: login.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['user'])) {
        header('Location: index.php');  
    }else { 
        include_once './view/_login.php';
    }
}

function number_cart_product(){
    $cart = $_SESSION['cart'];
    $number = 0;
    foreach ($cart as $order_detail) {
        $number += $order_detail['quantity'];
    }
    return $number;
}
?>
