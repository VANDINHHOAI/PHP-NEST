<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_orders()
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $order_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $order = array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'user_id' => $row['user_id'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'date' => $row['date'],
        );
        array_push($order_list, $order);
    }

    return $order_list;
}

function delete_order($order_id)
{
    global $pdo;

    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_id);

    $stmt->execute();
}

function insert_order($order)
{
    global $pdo;
    $sql = "INSERT INTO ORDERS(ID, CODE, STATUS, USER_ID, ADDRESS, PHONE, DATE) VALUES(NULL, :code, :status, :user_id, :address, :phone, :date)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':user_id', $order['user_id']);
    $stmt->bindParam(':address', $order['address']);
    $stmt->bindParam(':phone', $order['phone']);
    $stmt->bindParam(':date', $order['date']);

    $stmt->execute();
}

function get_order($product_id)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'user_id' => $row['user_id'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'date' => $row['date']
        );
    }

    return null;
}

function update_order($order)
{
    global $pdo;
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status, USER_ID=:user_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':id', $order['id']);
    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':user_id', $order['user_id']);

    $stmt->execute();
}


function get_all_by_order($userId)
{
    global $pdo;

    $sql = "SELECT `orders`.`id`, `orders`.`code`, `orders`.`status`, `orders`.`date`, address,
    GROUP_CONCAT(product.name) as product_names,
    SUM(product.price) as total, `orders`.`phone`,
    COUNT(order_items.order_id) as number
    FROM `orders`
    JOIN order_items ON `orders`.`id` = order_items.order_id
    JOIN product ON order_items.product_id = product.id
    WHERE `orders`.`user_id` = :userId
    GROUP BY `orders`.`id`;";


    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT); // Sử dụng bindParam để gán giá trị

    try {
        $stmt->execute();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $orders_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $productNames = explode(',', $row['product_names']);
        $orders = array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'date' => $row['date'],
            'total' => $row['total'],
            'number' => $row['number'],
            'user_id' => $row['id'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'name' => $productNames,
        );
        array_push($orders_list, $orders);
    }

    return $orders_list;
}
