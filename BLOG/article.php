<?php
include 'connection.php';
$sql="select * from articles";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $articles = $result->fetch_assoc();
    
} else {
    echo "0 results";
}

$conn->close();
?>

