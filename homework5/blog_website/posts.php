<!-- HEADER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php
if (! isset($_SESSION['auth'])) {
   jump_to('login.php');
   die();
}
?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>


<!-- Body Contents -->

<!-- Page title -->
<?php addTitleSection("Posts"); ?>


<?php
   // Auto calculation for the number of Posts columns
   $postsPerRow = 3;
   $noOfColumns = "col-" . (12 / $postsPerRow);

   //Get data from Json file//
   $postsJson = file_get_contents("database/posts.json");
   $postsArray = json_decode($postsJson, true);
?>

<div class="container mt-5">
   <!-- create new post Button -->
   <div class="row">
      <form action="post-create.php" method="post">
         <div class="form-control">
            <button type="submit" value="new-post" class="btn btn-primary col-12">Add Post</button>
         </div>
      </form>
   </div>

   <!-- posts cards -->
   <div class="row">
      <?php foreach ($postsArray as $key => $post): ?>
         <div class="<?= $noOfColumns ?> mt-3">
            <div class="card">
               <img src="assets/images/<?= $post['image']; ?>" class="card-img-top border" alt="Post<?= $post['post_id'] ?> Image">
               <div class="card-body">
                  <h5 class="card-title text-primary">Post number: <?= $post['post_id'] ?></h5>
                  <h5 class="card-title"><?= $post['title'] ?></h5>
                  <p class="card-text"><?= $post['body'] ?></p>
                  <a href="#" class="btn btn-primary">Read more</a>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</div>

<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>