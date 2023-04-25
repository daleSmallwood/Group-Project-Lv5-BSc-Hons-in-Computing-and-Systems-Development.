<?php
require_once("../scripts/dbConn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../Css/homeStyle.CSS">
  <meta charset="utf-8">
  <title>Home Page</title>
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
  <div class="LoginStatusContainer">
    <h2>Welcome to UCR Kebabs</h2>
    <p>Lets get started!</p>
      <div class="SignupButtons">
        <form class="EmailInput" method="post"action="signUp.php">
          <label>Sign up</label>
           <input id="signupEmail"class="EmailTextbox" type="text" name="dudEmail" placeholder="Type your Email address here." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  min="5"/>
           <input id="signupAccountcheck" class="HomeButton"  type="submit">
        </form>
      </div>
      <?php echo $_SESSION['message']; ?>
  </div>
</body>
  <?php
  require_once("Footer.php");
   ?>
</html>
