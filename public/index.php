<?php 
include_once '../core/db/db_product.php';
session_start();
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
?>