<?php
require_once("../scripts/dbConn.php");
$Username = $_POST["Username"];
$Message = $_POST["Message"];


if (!empty($Message)) {
  $_SESSION['message']="Please input a message";
  header('location: ../webpages/Contact.php');

}
if (!empty($Username)) {
  $_SESSION['message']="Please input your username";
  header('location: ../webpages/Contact.php');
}
else {
  $stmt->prepare("INSERT INTO contact(Username, Message) VALUES(?,?)");
  $stmt->bind_param("ss", $Username, $Message);
  $stmt->execute();
  $stmt->close();

  $_SESSION['message']="Your message has been sent";
  header('location: ../webpages/Contact.php');
}

 ?>
