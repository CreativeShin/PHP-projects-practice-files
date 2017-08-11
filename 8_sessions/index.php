<?php
  if(isset($_POST['submit'])){
    // start session
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    	header('Location: page1.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" placeholder="enter your name">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <a href="page1.php">page 1</a><br>
    <a href="destroy.php">destroy</a>
  </body>
</html>
