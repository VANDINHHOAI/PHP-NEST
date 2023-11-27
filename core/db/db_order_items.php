<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_order_items(){
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $order_item_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $order_item = array(
            'id' => $row['id'],
            'order_id' => $row['order_id'],
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'price' => $row['price']
        );
        array_push($order_item_list, $order_item);
    }
    
    return $order_item_list;
}

function delete_order_item($order_item_id){
    global $pdo;

    $sql = "DELETE FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_item_id);

    $stmt->execute();

}

function insert_order_item($order_item){
    global $pdo;
    $sql = "INSERT INTO ORDER_ITEMS(ID, ORDER_ID, PRODUCT_ID, QUANTITY, PRICE) VALUES(NULL, :order_id, :product_id, :quantity, :price)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':order_id', $order_item['order_id']);
    $stmt->bindParam(':product_id', $order_item['product_id']);
    $stmt->bindParam(':quantity', $order_item['quantity']);
    $stmt->bindParam(':price', $order_item['price']);

    $stmt->execute();
}

function get_order_item($order_item_id){
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_item_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'order_id' => $row['order_id'],
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'price' => $row['price']
        );
    }

    return null;
}

function update_order_items($order_item){
    global $pdo;
    $sql = "UPDATE ORDER_ITEMS SET ORDER_ID=:order_id, PRODUCT_ID=:product_id, QUANTITY=:quantity, PRICE=:price WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':id', $order_item['id']);
    $stmt->bindParam(':order_id', $order_item['order_id']);
    $stmt->bindParam(':product_id', $order_item['product_id']);
    $stmt->bindParam(':quantity', $order_item['quantity']);
    $stmt->bindParam(':price', $order_item['price']);

    $stmt->execute();
}