<?php
require_once 'db_product.php';

// function add_to_cart( $product_id, $quantity = 1 )
// {
//     $product = get_product($product_id);
//     $product_exist = true;

//     if ( isset( $_SESSION['cart'] ) ) {
//         $cart = $_SESSION['cart'];
//         $product_exist = check_product_exist($product_id);
//     } else {
//         $cart = array();
//         $product_exist = false;
//     }

//     if ( !$product_exist ) {
//         $order_detail = array(
//             "product_id" => $product["id"],
//             "img" => $product["img"],
//             "name" => $product["name"],
//             "price" => $product["price"],
//             "quantity" => $quantity
//         );

//         array_push($cart, $order_detail);

//         $_SESSION['cart'] = $cart;
//     }else{
//         update_to_cart( $product["id"], $quantity );
//     }
// }

// function delete($productId )
// {
//     $cart = $_SESSION['cart'];
//     $rs = array();

//     foreach (  $cart as $item ) {
//         if ($item['product_id'] != $productId) {
//             array_push($rs, $item);
//         }
//     }

//     $_SESSION['cart'] = $rs;
// }

// function update_to_cart($product_id, $increment)
// {
//     $cart = $_SESSION['cart'];
//     $rs = array();

//     foreach ( $cart as $order_detail ) {
//         if ($order_detail['product_id'] == $product_id) {
//             $order_detail['quantity'] += $increment;
//             if( $order_detail['quantity'] < 1 )
//                 $order_detail['quantity'] = 1;
//         }
//         array_push($rs, $order_detail);
//     }

//     $_SESSION['cart'] = $rs;
// }

// function get_cart()
// {
//     return isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
// }

// function check_product_exist($product_id)
// {
//     $cart = $_SESSION['cart'];
//     $rs = array();
//     $is_exist = false;

//     foreach ( $cart as $order_detail ) {
//         if ( $order_detail['product_id'] == $product_id ) {
//             $order_detail['quantity'] += 1;
//             $is_exist = true;
//         }
//         array_push($rs, $order_detail);
//     }

//     $_SESSION['cart'] = $rs;
//     return $is_exist;
// }

// function total_cart_item( $price, $quantity ){
//     return number_format( $price * $quantity, 0, '', ',');
// }


function create()
{
    $isEmpty = true;

    if (isset($_SESSION['cart'])) {
        //Gio hang da ton tai
        $cart = $_SESSION['cart'];
        /**
         * Kiem tra san pham co trong gio hang
         * 1: Neu co cap nhat them so luong
         * 2: Neu khong thi them vao gio hang
         */
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $_POST['productId']) {
                $cart[$i]['quantity'] = $cart[$i]['quantity'] +  1;
                $isEmpty = false;
                break;
            }
        }
    } else {
        //Lan dau dua vao gio hang. Gio hang chua ton tai
        $cart = array();
    }

    if ($isEmpty) {
        $order_item = array(
            'productId' => $_POST['productId'],
            'productName' => $_POST['productName'],
            'productImage' => $_POST['productImage'],
            'productPrice' => $_POST['productPrice'],
            'quantity' => $_POST['quantity'],
        );
        array_push($cart, $order_item);
    }

    $_SESSION['cart'] = $cart;
}

function delete()
{
    $cart = $_SESSION['cart'];
    $rs = array();

    foreach ($cart as $item) {
        if ($item['productId'] != $_POST['productId']) {
            array_push($rs, $item);
        }
    }

    $_SESSION['cart'] = $rs;
}

function update()
{
    if (isset($_POST['productId']) && isset($_POST['quantityUpdate'])) {
        if ($_POST['quantityUpdate'] > 0) {
            $productId = $_POST['productId'];
            $newQuantity = $_POST['quantityUpdate'];

            $cart = $_SESSION['cart'];

            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]['productId'] == $productId) {
                    $cart[$i]['quantity'] = $newQuantity;
                    break;
                }
            }

            $_SESSION['cart'] = $cart;
        }
    }
}

function total_cart()
{
    $cart = $_SESSION['cart'];
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['productPrice'] * $item['quantity'];
    }
    return number_format($total, 0, '', ',');
}

/**
 * Ham dem so luong product trong gio hang
 */
function number_cart_product(){
    $cart = $_SESSION['cart'];
    $number = 0;
    foreach ($cart as $order_detail) {
        $number += $order_detail['quantity'];
    }
    return $number;
}

function string_random($len = 10){
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = "";
    for($i=0; $i < $len; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}