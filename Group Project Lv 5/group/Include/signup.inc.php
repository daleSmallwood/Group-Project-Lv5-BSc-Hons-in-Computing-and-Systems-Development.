<?php

if (isset($_POST["SignUpButton"])){


  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  $Email = $_POST["Email"];

  require_once 'databasehandler.inc.php';
  require_once 'function.inc.php';

//if any of these errors happen it will return the user to the sign up page
  if (emptyInputSignup($Username, $Email, $Passowrd)!== false) {
    header("location: ../webpages/UCRkebabsHome.php?error=emptyinput");
    exit();
  }
  if (invalidUserid($Username)!== false) {
    header("location: ../webpages/UCRkebabsHome.php?error=InvalidUsername");
    exit();
  }
  if (invalidEmail($Email)!== false) {
    header("location: ../webpages/UCRkebabsHome.php?error=InvalidEmail");
    exit();
  }
  //check if the user name is already in use
  if (userExists($conn, $Username, $Email)!== false) {
    header("location: ../webpages/UCRkebabsHome.php?error=UserTaken");
    exit();
  }
//if there are no errors send data to the database
  createUser($conn, $Username, $Email, $Password);

}
else {
  header("location: ../webpages/UCRkebabsHome.php");
  exit();
}

 ?>
