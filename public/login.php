<?php
include_once '../core/db/boot.php';
@session_start();
$error_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = get_user_by_email($email);    
        $check_login = false;
    
            if ($user && ($user['password'] == $password)) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['users_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $check_login = true;
            }
        

        if ($check_login) {
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart']) && $_SESSION['isCheck']) {
                header('Location: check_out.php');
            } else {
                header('Location: index.php');
                $error_message = '';
            }
        } else {
            $check_login = false;
            $error_message = 'Your account or password is incorrect! ';
            include_once './view/_login.php';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
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
