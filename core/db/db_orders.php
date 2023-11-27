<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_orders(){
    global $pdo;

    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $order_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $order = array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'user_id' => $row['user_id'],
        );
        array_push($order_list, $order);
    }
    
    return $order_list;
}

function delete_order($order_id){
    global $pdo;

    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_id);

    $stmt->execute();

}

function insert_order($order){
    global $pdo;
    $sql = "INSERT INTO ORDERS(ID, CODE, STATUS, USER_ID) VALUES(NULL, :code, :status, :user_id)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':user_id', $order['user_id']);

    $stmt->execute();
}

function get_order($product_id){
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'user_id' => $row['user_id']
        );
    }

    return null;
}

function update_order($order){
    global $pdo;
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status, USER_ID=:user_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':id', $order['id']);
    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':user_id', $order['user_id']);

    $stmt->execute();
}