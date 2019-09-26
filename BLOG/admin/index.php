
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>  

<?php
session_start();
// define variables and set to empty values
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $pass = test_input($_POST["pass"]);
    $_SESSION['username']="$name";
    $_SESSION['pass']="$pass";
    header("Location:adminpanel.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="container">
<h2>ADMIN ACCESS</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="username">
  <br><br>
  Pass: <input type="text" name="pass">
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>
</div>


</body>
</html>
