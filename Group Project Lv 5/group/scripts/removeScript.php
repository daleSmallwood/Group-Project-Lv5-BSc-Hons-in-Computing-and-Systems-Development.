<?php
require_once("../scripts/dbConn.php");



$productID=$_GET["productID"];

$stmt = $conn->prepare("SELECT productPath, productImage FROM kebabproducts WHERE productID=?");
$stmt->bind_param("i", $productID);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($productPath ,  $productImage);
$stmt->fetch();
$stmt->close();

unlink($productPath);
if($productImage !="../images/placeholder.png")
{
unlink($productImage);
}

$stmt = $conn->prepare("DELETE FROM kebabproducts WHERE productID=?");
$stmt-> bind_param('i', $productID);
$stmt-> execute();
$stmt-> close();

$_SESSION['message']="Product removed";
header("location: ../webpages/UCRkebabsMenu.php");
?>
