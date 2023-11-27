<?php 
session_start();

define("BASE_URL","http://localhost/eshop");

require_once("../core/auth.php");
require_once("../core/db/db_product.php");
require_once("../core/db/db_category.php");
require_once("../core/db/db_orders.php");
require_once("../core/db/db_order_items.php");
