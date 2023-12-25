<?php 
include_once 'core/db/boot.php';

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
                update_to_cart( $_POST['productId'], $_POST['value'] );
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

?>