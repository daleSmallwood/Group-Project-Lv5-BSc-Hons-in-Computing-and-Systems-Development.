  <?php
  require_once("../scripts/dbConn.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../Css/uploadStyle.css">
    <meta charset="utf-8">
    <title>Upload page</title>
  </head>
  <body class="kebabBody">
    <?php require_once("Nav.php"); ?>
    <img class="CompanyLogo" src="../Images/UCRkebabs.png"alt="Image not found"></img>

<div class="uploadContainer">
  <form action="../scripts/ProductUpScript.php" method="post" enctype="multipart/form-data">
    <p class="uploadText">Please enter a Product Name:</p><input type="text" name="productName"><br><br>
    <p class="uploadText">Please enter a description:</p><input type="text" name="productDescription"><br><br>
    <p class="uploadText">Please input the cost of the product:</p><input type="text" name="productCost"><br><br>
    <p class="uploadText">Upload your thumnail:</p> <input type="file" name="productImage"><br><br>
    <button  type="submit" name="submit" class="uploadButton">Submit<a></button>

   </form>
    <?php
      echo $_SESSION['message'];
      $_SESSION['message'] ="";
     ?>
</div>

<?php require_once("Footer.php");  ?>
</body>
</html>
