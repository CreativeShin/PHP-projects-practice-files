<?php include 'views/partials/header.php' ?>
<?php

  $msg = "";
  $msgClass = "";

  if(filter_has_var(INPUT_POST, 'submit')){
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // check required
    if(!empty($name) && !empty($email) && !empty($message)){
      // check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          // passed
          $toEmail = 'krowtriad@yandex.com';
  				$subject = 'Contact Request From '.$name;
  				$body = '<h2>Contact Request</h2>
  					<h4>Name</h4><p>'.$name.'</p>
  					<h4>Email</h4><p>'.$email.'</p>
  					<h4>Message</h4><p>'.$message.'</p>
  				';

  				// Email Headers
  				$headers = "MIME-Version: 1.0" ."\r\n";
  				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

  				// Additional Headers
  				$headers .= "From: " .$name. "<".$email.">". "\r\n";

  				if(mail($toEmail, $subject, $body, $headers)){
  					// Email Sent
  					$msg = 'Your email has been sent';
  					$msgClass = 'alert-success';
          }else{
            $msg = 'Something went wrong';
  					$msgClass = 'alert-danger';
          }
      }else{
        // failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      }
    }else{
      // failed
      $msg = 'Please fill in all details';
      $msgClass = 'alert-danger';
    }
  }
?>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">FrontToBAck</a>
    </div>
  </div>
</nav>

<div class="container">
  <?php if($msg != ""): ?>
      <div class="alert <?php echo $msgClass; ?>">
        <?php echo $msg; ?>
      </div>
  <?php endif; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label>Name</label>
      <input class="form-control" type="text" name="name" value="<?php echo isset($name) ? $name : '' ?>">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input class="form-control" type="email" name="email" value="<?php echo isset($email) ? $email : '' ?>">
    </div>
    <div class="form-group">
      <label>Message</label>
      <textarea name="message" class="form-control"><?php echo isset($message) ? $message : '' ?></textarea>
    </div><br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php include 'views/partials/footer.php' ?>
