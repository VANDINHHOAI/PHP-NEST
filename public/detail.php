<?php 
include_once '../core/db/db_product.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    include_once './view/_detail.php'; 
}
?>