<?php
require_once("../scripts/dbConn.php");


$thumbTarget_dir="../Images";
$ProductName=$_POST["productName"];
$ProductDesc=$_POST["productDescription"];
$thumbFile=$_FILES["productImage"]["name"];
$ProductCost=$_POST["productCost"];

$thumbTarget= $thumbTarget_dir . $thumbFile;
$thumbFileType=pathinfo($thumbTarget, PATHINFO_EXTENSION);



if (!empty($thumbFile))
{

  if(move_uploaded_file($_FILES["productImage"]["tmp_name"], $thumbTarget))
{
    $stmt = $conn->prepare("INSERT INTO kebabproducts(productName, productDescription, productPath, productCost, IDkey) VALUES(?,?,?,?,?)");
    $stmt->bind_param("ssssi", $ProductName, $ProductDesc, $thumbTarget, $ProductCost, $_SESSION["IDkey"]);
    $stmt->execute();
    $stmt->close();
    $_SESSION["message"]="The product was uploaded successfully!!";
    header('location: ../webpages/uploadPage.php');
  }
  else
  {
    $_SESSION["message"]="There was an error uploading the thumnail";
    header('location: ../webpages/uploadPage.php');
  }

}
?>
