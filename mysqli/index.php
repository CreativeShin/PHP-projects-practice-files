<?php
  require 'config/config.php';
  require 'config/db.php';
  // query
  $query = 'SELECT * FROM posts';
  // result
  $result = mysqli_query($conn, $query);
  // data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php include 'inc/header.php' ?>
    <div class="container">
      <h1>Blog</h1>
      <?php foreach($posts as $post): ?>
        <div class="well">

            <h2><?php echo $post['title']; ?></h2>
            <small><?php echo $post['created_at']; ?></small>
            <p class="content">
              <?php
                if(strlen($post['body']) >= 200){
                  echo substr($post['body'], 0,200)."...";
                }else{
                    echo $post['body'];
                }
              ?>
            </p>
            <p>Author : <?php echo $post['author']; ?></p>
            <div>
              <a class="btn btn-default" href="<?php echo ROOT_URL ?>post.php?id=<?php echo $post['id'];?>" >Read More</a>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
<?php include 'inc/footer.php' ?>
