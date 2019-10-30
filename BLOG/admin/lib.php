<?php
if(count(get_included_files()) ==1){
  header("Location: /404.php");
  exit();
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
