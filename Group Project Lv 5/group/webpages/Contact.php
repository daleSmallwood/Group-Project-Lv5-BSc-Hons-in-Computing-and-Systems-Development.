<?php
require_once ("../scripts/dbConn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link href='../Css/ContactStyle.css' rel="stylesheet">
  <head>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <meta charset="utf-8">

	<title>Contact</title>

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

<div class="contactContainer">
  <h2>Contact us</h2>
  <p>Please input infomation below</p>
    <div class="contactButtons">
      <form action="../scripts/contactScript.php" class="contactInput" method="post">
        <input type="text" name="Username" placeholder="Type your Username here." minlength="1" required ><br>
        <input type="text" name="Message" placeholder="Please leave your message here." minlength="5" Required ><br>
         <button  type="submit" name="submit" class="contactButton">Submit<a></button>
       </form>
    </div>
    <?php
   echo $_SESSION['message'];
     ?>
</div>

</body>


<?php require_once("Footer.php");  ?>

</html>
