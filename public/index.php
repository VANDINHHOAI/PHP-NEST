<?php 
include_once '../core/db/boot.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['_method'])){
        switch($_POST['_method']){
            case 'delete':
                delete();
                break;
            case 'create':
                create();
                break;
            case 'update':
                update();
                break;
            }
                        
    }
    header('location: index.php'); 
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    include_once './view/_index.php'; 
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = array();
    }
}


function delete(){
    $cart = $_SESSION['cart'];
    $rs = array();

    foreach($cart as $item){
        if($item['productId'] != $_POST['productId']){
            array_push($rs, $item);
        }
    }

    $_SESSION['cart'] = $rs;
}

function total_cart(){
    $cart = $_SESSION['cart'];
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['productPrice'] * $item['quantity'];
    }
    return number_format($total, 0, '', ',');
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