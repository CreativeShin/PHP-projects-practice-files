<!-- PHP HERE -->
<?php
  // if(isset($_GET['name'])){
  //   // print_r($_GET);
  //   $name = htmlentities($_GET['name']);
  //   echo $name;
  //   // cross site scripting attacks //xss
  // }

  // if(isset($_POST['name'])){
  //   print_r($_POST);
  //   $name = htmlentities($_POST['name']);
  //   echo $name;
  //
  // }

  // if(isset($_REQUEST['name'])){ //not used much
  //   print_r($_REQUEST);
  //   $name = htmlentities($_REQUEST['name']);
  //   echo $name;
  // }

  // echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GET | POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  </head>
  <body>
    <!-- plain bootstrap form -->

      <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <!-- action is get_post.php and method is post -->

              <form class="form" action="get_post.php" method="get" style="padding-top:20%;">
                  <div class="form-group">
                    <label for="name">Name: </label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="John Doe">
                  </div>
                  <div class="form-group">
                    <label for="email">Email: </label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="example@xyz.com" required>
                  </div>
                  <input type="submit" class="btn btn-default">
              </form>
              <!--  something cool here -->

              <!-- <ul>
                <li><a href="get_post.php?name=steve">steve</a></li>
                <li><a href="get_post.php?name=brad">brad</a></li>
              </ul>
              <h4><?php //echo "{$name}'s profile" ?></h4> -->

            </div> <!-- col-sm-6 end -->
        </div> <!--row end -->
      </div> <!--container end -->
  </body>
</html>
