  <?php

  require_once("../scripts/dbConn.php");
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$stmt = $conn->prepare("SELECT IDkey, accessLevel, Username, Password FROM  kebabusers WHERE Username =?");
$stmt->bind_param('s', $Username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($IDkey, $dbUsername, $dbPassword,$dbacessLevel);
$stmt->fetch();
$stmt->close();

echo $Password;
echo "<br>";
echo $dbPassword;
if($Username == $dbUsername && $Password == $dbPassword)
{
  $_SESSION['message']="You have logged in welcome $dbUsername";
  $_SESSION['LoggedIn']=true;
  $_SESSION['accessLevel']=$dbacessLevel;
  $_SESSION['Username']=$dbUsername;
  $_SESSION['IDkey']=$IDkey;
  echo "Logged in";
  header('location: ../webpages/AdminPage.php');
}
  else
  {
     $_SESSION['message'] = "invalid username or password";
     echo "Failed";
     header('location: ../webpages/loginPage.php');
  }



?>
