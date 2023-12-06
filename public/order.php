<?php 
include_once '../core/db/boot.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $user_id = $_SESSION['user']['id'];
    $order = get_all_by_order($user_id);
    if (isset($_SESSION['user'])) {
        include_once './view/_order.php'; 
    } else {
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