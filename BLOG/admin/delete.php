<html>
<head>
<title> PERSONAL BLOG</title>
<link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <div class="container">
<a href="index.php" id="logo">ADD YOUR POST MR. UMANG</a><br><br>
</div>
<form method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<div class="container">

    <input type="text" name="title" placeholder="title" style="height:50px;width:200px;" /><br><br> 
    <input type="submit" value="Delete POST"/>   
</div>
    
</div>
</body>
</html>
<?php
include_once('../connection.php');
require_once('./lib.php');
session_start();
// define variables and set to empty values
$title = $content = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $sqla="delete from articles where article_title='$title';";
  if($conn->query($sqla)===TRUE){
      echo "POST REMOVED";
  }
  else{
      echo "Failed to post";
  }
}

session_destroy();
?>
