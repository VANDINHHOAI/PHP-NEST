<?php 
include_once 'core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $is_register_success = true;

    if(isset($_POST['email']) && !empty(trim($_POST['email'])) 
    && isset($_POST['password']) && !empty(trim($_POST['password'])) 
    && isset($_POST['cpassword']) && !empty(trim($_POST['cpassword']))
    && $_POST['password'] == $_POST['cpassword']){
        $user = register($_POST['email'], $_POST['password']);  
        if($user == false){
            $_SESSION['flash_message'] = 'User already exist!';
            $is_register_success = false;
        }else{
            $_SESSION['user'] = $user;
            $is_register_success = true;
        }
    }else{
        $_SESSION['flash_message'] = 'Register failed';
        $is_register_success = false;
    }
      
    if($is_register_success){
        header('Location: login.php');
    }else{
        header('Location: register.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
    include_once './view/_register.php';
}
?>
