<?php
require_once("../scripts/dbConn.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../Css/adminStyle.css">
  <meta charset="utf-8">
  <title>Admin page</title>
</head>
<body class="kebabBody">
  <?php require_once("Nav.php"); ?>

  <img class="CompanyLogo" src="../Images/UCRkebabs.png"alt="Image not found"></img>

<?php
if($_SESSION['LoggedIn']==false)
{
echo "<div class='Login'><a href='loginPage.php'><b>Login</b></a></div>";
}
else
{
echo "<div class='Login'><a href='../scripts/logoutScript.php'><b>Log Out</b></a></div>";
}
?>

  <div class="StatusContainer">
    <h2>Welcome admin what do you require?</h2>
    <p>Please select below</p>
    <?php
          echo $_SESSION['message'];
          $_SESSION['message'] = "";

    ?>
    <div class="Adminbuttons">
      <a class="uploadButton" href="uploadPage.php">Upload New product</a>
      <a class="removeButton" href="#">Remove a product</a>
      <a class="changeButton" href="#">Change price of a product</a>

    </div>
  </div>





</body>

</html>

<?php
require_once("Footer.php");
?>
