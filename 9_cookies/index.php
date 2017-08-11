<?php
  if(isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);
    // echo time(); prints the time in seconds
    // setcookie('username', $username, time() + 3600);
    $user = [
      'name' => 'Frank',
      'age' => 35
    ];
    $user = serialize($user);
    setcookie('user', $user, time() + 3600);
    header('Location: page2.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <h2 class="text-center">Cookies</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
              <label>Username</label>
              <input class="form-control" type="text" name="username" placeholder="username">
          </div>
          <div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>
