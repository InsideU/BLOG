<?php
include 'connection.php';
$id=$_GET['id'];

$sql="select * from articles where article_id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $articles = $result->fetch_assoc();
    
    
} else {
    echo "0 results";
}
?>
<html>
<head>
<title> PERSONAL BLOG</title>
<link rel="stylesheet" href="style.css"/>

</head>
<body>

<div class="container">
        <a href="index.php" id="logo">BLOG</a>
    <ol>
        <li><a href="articles.php?id=<?php echo $articles['article_id'];?>">
        <p><?php echo $articles["article_title"]; ?></p>
        </a>----
        <small> <?php echo date('l jS',$articles['article_timestamp']); ?>
        </small>
        </li>
        <p> <?php echo $articles['article_content'];?> </p>

        
    
</div>

</body>
</html>


