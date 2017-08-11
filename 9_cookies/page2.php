<?php
  // echo $_COOKIE['username'];
  $user = unserialize($_COOKIE['user']);
  echo ($user['age']);
  echo '<br>';
?>
<a href="index.php">Home</a>
