<?php
session_start();
include_once('../connection.php');
$user= $_SESSION['username'];
$pass=$_SESSION['pass'];
$sqlx="select * from users where user_name='$user' and user_password='$pass'";
$result = $conn->query($sqlx);
if ($result->num_rows > 0) {
    ?>
    <html>
        <head><link rel="stylesheet" href="../style.css"/></head>
        <body>
            <div class="container">
                <ul>
                    <li><a href="add.php">Add article</a></li>
                    <li><a href="delete.php">Delete article</a></li>
                    <li><a href="logout.php">Logout</a></li>

</div>
    
</body>
</html>
<?php
} else {
    header("Location:index.php");
}

?>