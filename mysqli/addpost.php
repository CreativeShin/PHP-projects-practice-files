<?php
  require 'config/config.php';
  require 'config/db.php';
  if(isset($_POST['submit'])){
    // get data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
    if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL);
    }else{
      echo 'Error '.mysqli_error($conn);
    }
  }

?>
<?php include 'inc/header.php' ?>
    <div class="container">
      <h1>Add Post</h1>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title">
          </div>
          <div class="form-group">
            <label>Author</label>
            <input class="form-control" type="text" name="author">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body"></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
<?php include 'inc/footer.php' ?>
