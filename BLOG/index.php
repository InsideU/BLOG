<?php
include_once('connection.php');
include_once('article.php');

?>
<html>
<head>
<title> PERSONAL BLOG</title>

</head>
<body>
    <div class="container">
<a href="index.php" id="logo">BLOG</a>
</div>
<?php

while($article=$result->fetch_assoc()){ ?>



<div class="container">
    
    <ul>
        <li><a href="articles.php?id=<?php echo $article['article_id'];?>">
        <?php echo $article["article_title"]; ?><br>
        </a>--
        <small> <?php echo date('l jS',$article['article_timestamp']); ?>
        </small>
        </li>
</ul>

<?php } ?>
<small><a href="admin/index.php">~ admin</a></small>
</div>
</body>
</html>