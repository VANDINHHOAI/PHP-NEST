<?php
include_once 'core/db/boot.php';

unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['cart']);
unset($_SESSION['role']);
header('Location: index.php');
?>