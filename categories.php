<?php 
include_once 'core/db/boot.php';
@session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
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
    header('location: categories.php');
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // $page;
    // if(isset($_GET['page'])) {
    //     $page = $_GET['page'];
    // } elseif (isset($_GET['page']) && $_GET['page'] < '1') {
    //     $page = 1;
    // } else {
    //     $page = 1;
    // }
    // $productList = get_products_by_page($page);


    $category_list = get_all_categories();
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $productList = get_products_by_category_and_page($category_id, $page);
    } else {
        $page = 1;
        if (isset($_GET['page'])) {
            $page = intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
        }
        // Nếu không có giá trị lọc, lấy danh sách tất cả sản phẩm
        $productList = get_products_by_page($page);
    }
    // if (isset($_GET['search'])) {
    //     $search = $_GET['search'];
    //     // Gọi hàm xử lý tìm kiếm với từ khóa
    //     $searchResults = get_search_products($search);
    // }

    include_once './view/_categories.php'; 
}
?>