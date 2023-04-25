  <?php
  require_once("../scripts/dbConn.php");
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../Css/loginStyle.CSS">
    <meta charset="utf-8">
    <title>Login</title>
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
      <p>Only a few steps away input your details bellow.</p>

      <form action="../scripts/loginScript.php"  method="post">
        <label class="usernameLable">Username:</label>
        <input class="loginUserbox" type="text" name="username" placeholder="Username"minlength="1"><br>

        <label class="loginLable">Password:</label>
        <input class="loginPassbox" required type="password" name="password" placeholder="Password" minlength="5"><br>
        <input class="loginButton" type="submit">
      </form>
      <?php
     echo $_SESSION['message'];
       ?>
    </div>
  </body>
</html>



<?php require_once("Footer.php");  ?>
