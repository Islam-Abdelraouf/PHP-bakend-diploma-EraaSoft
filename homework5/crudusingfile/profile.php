<!-- Head section -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- url jumbing attack -->
<?php if (! isset(($_SESSION['auth']))) {
  jump_to("login.php");
  die();
}
?>

<?php $user_data = $_SESSION['auth']; ?>

<!-- Navigation section -->
<?php include 'inc/nav.php'; ?>


<div class="border col-6 mx-auto text-center py-1 mt-2 mb-2 py-4">
  <h3>Admin Area - Profile Page</h3>
</div>

<div class="card col-6 mx-auto mt-4 mb-1">
  <div class="card-header">
    user credentials
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">user id: <?= $user_data[0] ?></li>
    <li class="list-group-item">username: <?= $user_data[1] ?></li>
    <li class="list-group-item">user email: <?= $user_data[2] ?></li>
  </ul>
</div>

<div class="container col-2 ">
  <form action="edit.php" method="post">
    <!-- submit button -->
    <div class="input-set">
      <button type="submit" name="update" class="btn btn-primary col-12">Update</button>
    </div>
  </form>
</div>

<!-- Footer section -->
<?php include 'inc/footer.php'; ?>