<?php
  require_once('connect.php');
  require_once('init.php');
  $username = mysqli_real_escape_string($link, $username);
  $sql = "SELECT profilePic FROM tbl_user WHERE fname=$username";
$result = mysql_query("$sql");
$row = mysql_fetch_assoc($result);
  mysqli_close($link);

  echo $row["profilePic"];
}
  ?>
