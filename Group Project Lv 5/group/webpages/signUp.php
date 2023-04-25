<?php
require_once ("../scripts/dbConn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link href='../Css/signUpStyle.css' rel="stylesheet">
  <head>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <meta charset="utf-8">

	<title>Sign Up</title>

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

<div class="SignUpStatusContainer">
  <h2>Welcome</h2>
  <p>Please input infomation below</p>
    <div class="SignupButtons">
      <form action="../scripts/signUpScript.php" class="SignUpInput" method="post">
        <label>Sign up</label>
        <br>
        <input type="text" name="Username" placeholder="Type your Username here." minlength="1" required ><br>
        <input type="Password" name="Password" placeholder="Type your Password here (must be 5 or more characters)." minlength="5" Required ><br>
        <input type="Password" name="rePassword" placeholder="Type your Password here (must be 5 or more characters)." minlength="5" Required ><br>

         <button  type="submit" name="submit" class="SignUpButton">Submit<a></button>
         </form>
 <?php
echo $_SESSION['message'];
  ?>
    </div>
</div>

</body>


<?php require_once("Footer.php");  ?>

</html>
