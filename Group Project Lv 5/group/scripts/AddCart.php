<?php
require_once("../scripts/dbConn.php");
require_once("../scripts/ProductUpScript");




if(empty($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'],$_GET['productID']);
?>
