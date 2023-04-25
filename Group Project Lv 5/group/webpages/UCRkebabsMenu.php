<?php
require_once("../scripts/dbConn.php");
require_once "../Include/databasehandler.inc.php";



$stmt = $conn->prepare("SELECT productID, productName, productDescription, productPath, productCost FROM kebabproducts");
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($productID, $productName, $productDescription, $productPath, $productCost);

if (isset($_POST['add_to_cart'])){
 if(isset($_SESSION['cart'])){

 }
 else
 {
   $session_array = array(
     'productID' => $_GET['productID'],
     "productName"=> $_POST['productName'],
     "productCost"=> $_POST['productCost'],
     "quantity"=> $_POST['quantity']
   );
   $_SESSION['cart'][] = $session_array;
 }
}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../Css/UCRkebabsMenu.CSS">
  <meta charset="utf-8">
  <title>Menu</title>
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






<div id="Productlist">
  <?php
    while ($stmt->fetch())
    {
      echo"
        <div class='MenuBox'\"'>
          <div class='productName'>
          <h2>$productName</h2>
          <img src='$productPath' width='200px' height='200px'>
          <br>
            <b>$productDescription</b>
            <br>
            <b>Cost: $productCost</b>

            <button  type='submit' name='AddToCart' action=''UCRkebabsMenu.php?id=<?=$productID'' class='SignUpButton'>Add to order<a></button>

          </div>
        </div>
        <br>
      ";
    }

   ?>

<?php  ?>

<form method="get" class="add_to_cart" action="UCRkebabsMenu.php?id=?>" >
  <h4>Your Order</h4>
  <h5><?$productName?></h5>
  <input type="hidden" name="productName" value="<?=$productName['name']?>">
  <input type="hidden" name="productCost" value="<?=$productCost['cost']?>">
  <input type="submit" name="add_to_cart" value="Add to Cart">
  <button type="submit" name="button" class="checkout">Submit</button>
</form>


</div>
<div id="orderCart">
  <div class="Cart">
    <h3>Your Order</h3>

    <button type="submit" name="Checkout"><u>Prodced to checkout</u></button>
    <?php
   echo $_SESSION['message'];

     ?>
  </div>
</div>

  </body>
  <?php require_once("Footer.php"); ?>
</html>
