<?php
require_once("../scripts/dbConn.php");
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$rePassword = $_POST["rePassword"];

if($_SESSION['LoggedIn']==true)
{
  $_SESSION['message']="You are already logged in";
  header('Location: ../webpages/UCRkebabsHome.php');

}
if($Password !=$rePassword)
{
  $_SESSION['message']="Your passwords do not match";
  header('Location: ../webpages/signUp.php');
}

$stmt = $conn->prepare("SELECT Username FROM kebabusers WHERE Username = ?");
$stmt->bind_param('s', $Username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($dbUsername);
$stmt->fetch();
if ($Username==$dbUsername)
{
    $_SESSION['message']="That username already exists, please pick another";
    $stmt->close();
    header('Location: ../webpages/signUp.php');
}

$stmt->prepare("INSERT INTO kebabusers(Username, Password) VALUES(?,?)");
$stmt->bind_param("ss", $Username, $Password);
$stmt->execute();
$stmt->close();

$_SESSION['message']="you have now created an account welcome $Username please login";
header('location: ../webpages/UCRkebabsHome.php');


 ?>
