<?php
  require 'config/config.php';
  require 'config/db.php';
  // query
  $id = $_GET['id'];
  $query = 'SELECT * FROM posts WHERE id= '.$id;
  // result
  $result = mysqli_query($conn, $query);
  // data
  $post = mysqli_fetch_assoc($result);

  if(isset($_POST['delete'])){
    // get data
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id= {$delete_id}";
    if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL);
    }else{
      echo 'Error '.mysqli_error($conn);
    }
  }
?>
<?php include 'inc/header.php' ?>
    <div class="container">
      <h1>Blog</h1>

        <div class="well">
            <h2><?php echo $post['title']; ?></h2>
            <small><?php echo $post['created_at']; ?></small>
            <p class="content"><?php echo $post['body']; ?></p>
            <p>Author : <?php echo $post['author']; ?></p>
            <div>
              <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Back</a>
              <a class="btn btn-warning pull-right" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit</a>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  style="display: block; padding-top: 10px;" >
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
<?php include 'inc/footer.php' ?>
