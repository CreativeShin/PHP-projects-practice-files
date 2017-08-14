<?php
  require 'config/config.php';
  require 'config/db.php';
  $id = $_GET['id'];
  $query = 'SELECT * FROM posts WHERE id= '.$id;
  // result
  $result = mysqli_query($conn, $query);
  // data
  $post = mysqli_fetch_assoc($result);
  if(isset($_POST['submit'])){
    // get data
    $updated_id = mysqli_real_escape_string($conn, $_POST['updated_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET title='$title', body='$body', author='$author' WHERE id={$updated_id}";
    if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL);
    }else{
      echo 'Error '.mysqli_error($conn);
    }
  }

?>
<?php include 'inc/header.php' ?>
    <div class="container">
      <h1>Edit Post</h1>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="<?php echo $post['title'] ?>">
          </div>
          <div class="form-group">
            <label>Author</label>
            <input class="form-control" type="text" name="author" value="<?php echo $post['author'] ?>">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body"><?php echo $post['body'] ?></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          <input type="hidden" name="updated_id" value="<?php echo $post['id'] ?>">
      </form>
    </div>
<?php include 'inc/footer.php' ?>
