<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_products(){
    global $pdo;

    $sql = "SELECT * FROM PRODUCT";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }
    
    return $product_list;
}

function get_products_by_page($page){
    global $pdo;

    $perPage = 10;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT * FROM PRODUCT LIMIT $begin, $perPage";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }
    
    return $product_list;
}

function delete_product($product_id){
    global $pdo;

    $sql = "DELETE FROM PRODUCT WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id);

    $stmt->execute();

}

function insert_product($product){
    global $pdo;
    $sql = "INSERT INTO PRODUCT(ID, IMAGE, DESCRIPTION, PRICE, QUANTITY, NAME, CATEGORY_ID) VALUES(NULL, :image, :description, :price, :quantity, :name, :category_id)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':image', $product['image']);
    $stmt->bindParam(':description', $product['description']);
    $stmt->bindParam(':price', $product['price']);
    $stmt->bindParam(':quantity', $product['quantity']);
    $stmt->bindParam(':name', $product['name']);
    $stmt->bindParam(':category_id', $product['category_id']);

    $stmt->execute();
}

function get_product($product_id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCT WHERE ID=:id";
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
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'name' => $row['name'],
            'category_id' => $row['category_id'],
        );
    }

    return null;
}

function update_product($product){
    global $pdo;
    $sql = "UPDATE PRODUCT SET IMAGE=:image, DESCRIPTION=:description, PRICE=:price, QUANTITY=:quantity, NAME=:name, CATEGORY_ID=:category_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':id', $product['id']);
    $stmt->bindParam(':image', $product['image']);
    $stmt->bindParam(':description', $product['description']);
    $stmt->bindParam(':price', $product['price']);
    $stmt->bindParam(':quantity', $product['quantity']);
    $stmt->bindParam(':name', $product['name']);
    $stmt->bindParam(':category_id', $product['category_id']);

    $stmt->execute();
}

function get_search_products($search){
    global $pdo;

    $sql = "SELECT * FROM product WHERE name LIKE :search";
    $stmt = $pdo->prepare($sql);

    // Sử dụng bindValue thay vì bindParam để tránh lỗi
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    return $result;
}

function get_products_by_category($category_id){
    global $pdo;

    $sql = "SELECT product.id, product.image, product.name, product.description, price, quantity, category_id
    FROM product
    JOIN categories ON product.category_id = categorie.id
    WHERE category_id = :id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $category_id);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $products_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $products= array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id']
        );
        array_push($products_list, $products);
    }
    
    return $products_list;
}
function get_products_by_category_and_page($category_id, $page) {
    global $pdo;

    $perPage = 8;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT * FROM product WHERE category_id = :category_id LIMIT $begin, $perPage";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }

    return $product_list;
}