<?php
  session_start();
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : "guest";
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : "Not subscribed";
  echo $name;
  echo '<br>'.$email;
  echo '<br>';
?>
<a href="index.php">Go back</a>
<a href="destroy.php">Destroy</a>
