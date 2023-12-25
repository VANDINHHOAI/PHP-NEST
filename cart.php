<?php
include_once 'core/db/boot.php';

@session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
            case 'delete':
                delete();
                break;
            case 'create':
                create();
                break;
            case 'update':
                update_to_cart( $_POST['productId'], $_POST['value'] );
                break;
        }
    }
    header('location: cart.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }

    include_once './view/_cart.php';
}
