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
            </div>
        </div>
    </div>
<?php include 'inc/footer.php' ?>
