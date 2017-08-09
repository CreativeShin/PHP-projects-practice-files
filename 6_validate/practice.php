<?php
  // if(filter_has_var(INPUT_POST, 'email')){
  //   if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
  //     echo 'Yes';
  //   }else{
  //     echo 'No';
  //   }
  // }

    // if(filter_has_var(INPUT_POST, 'email')){
    //   $email = $_POST['email'];
    //   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     echo 'Yes';
    //   }else{
    //     echo 'No';
    //   }
    // }


 ?>

 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="email" name="email" placeholder="email@abc.com" required>
    <button type="submit" name="submit">Submit</button>
 </form>
