<?php 
include_once '../core/db/boot.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['phone']) &&  isset($_POST['address'])) {
        $email = $_SESSION['email'];
        $user = get_user_by_email($email);
        if ($user) {
            $id = $user['id'];
            $orders = array(
                'code' => string_random(10),
                'status' => 'pending',
                'user_id' => $id,
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'date' => date('Y-m-d H:i:s'), 
            );
            insert_order($orders);

            $orderId = get_last_inserted_order_id();

            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                $orderItems = array(
                    "order_id" => $orderId,
                    "product_id" => $cart[$i]['productId'],
                    "quantity" => $cart[$i]['quantity'],
                    "price" => $cart[$i]['productPrice'] *  $cart[$i]['quantity'],
                );
                insert_order_item($orderItems);
            }
            unset($_SESSION['cart']);
            header('location: order.php');
        }else{
            header('location: login.php');
        }
    }

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
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    $_SESSION['isCheck'] = false;

    if (isset($_SESSION['email'])) {
        include_once './view/_checkout.php'; 
    }else { 
        $_SESSION['isCheck'] = true;
        include_once './view/_login.php';
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


function string_random($len = 10){
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = "";
    for($i=0; $i < $len; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

function get_last_inserted_order_id() {
    global $pdo; // Biến PDO cần được khai báo ở đây, thay thế bằng biến PDO của bạn
    return $pdo->lastInsertId();
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