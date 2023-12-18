<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_staff(){
    global $pdo;

    $sql = "SELECT * FROM staff";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $staff_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $staff = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'position' => $row['position'],
            'office' => $row['office'],
            'age' => $row['age'],
            'starDate' => $row['starDate'],
            'salary' => $row['salary'],
        );
        array_push($staff_list, $staff);
    }
    
    return $staff_list;
}
?>