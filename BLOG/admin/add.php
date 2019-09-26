<html>
<head>
<title> PERSONAL BLOG</title>
<link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <div class="container">
<a href="index.php" id="logo">ADD YOUR POST MR. UMANG</a>
</div>
<form method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<div class="container">
    <input type="text" name="title" placeholder="title"/><br><br>
    <textarea row ="15" cols="50" placeholder="content" name="content"></textarea><br><br> 
    <input type="submit" value="Add Post"/>   
</div>
    
</div>
</body>
</html>
<?php
include_once('../connection.php');
session_start();
// define variables and set to empty values
$title = $content = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $content = test_input($_POST["content"]);
  $title = test_input($_POST["title"]);
  $sqla="insert into articles(article_title,article_content,article_timestamp) values('$title','$content',1321);";
  if($conn->query($sqla)===TRUE){
      echo "POSTED";
  }
  else{
      echo "Failed to post";
  }
}

function test_input($data) {
  return $data;
}
session_destroy();
?>