<?php
require_once("../scripts/dbConn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../Css/aboutStyle.CSS">
  <meta charset="utf-8">
  <title>About us</title>
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

  <div class="aboutUsContainer">
    <h2>About UCR Kebabs</h2>
    <p>UCR kebabs is a brand new takeaway coming to your university!</p>
    <br>
    <p>Currently UCR Kebabs products are collection only and are planning to deliver soon.</p>
      <div class="UCRmap">
          <h4>You can find us here.</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.120534487126!2d-1.3542379843340373!3d53.430553076101894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48797702b0252f37%3A0x632710a82ee63fe5!2sUniversity%20Centre%20Rotherham!5e0!3m2!1sen!2suk!4v1651682744278!5m2!1sen!2suk" width="400" height="300"></iframe>
      </div>
  </div>
</body>


<?php  require_once("Footer.php"); ?>
</html>
