<!-- NAV bar section -->

<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary shadow" style="height: 6rem;">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <!-- Home Page -->
          <a class="nav-link active" href="index.php">Home</a>
        </li>


        <?php if (isset($_SESSION['auth'])): ?>
          <!-- Profile -->
          <li class="nav-item">
            <a class="nav-link active" href="profile.php">Profile</a>
          </li>
          <!-- Posts -->
          <li class="nav-item">
            <a class="nav-link active" href="posts.php">Posts</a>
          </li>
          <!-- comments -->
          <li class="nav-item">
            <a class="nav-link active" href="content.php">Comments</a>
          </li>
        <?php endif; ?>
        <!-- contact us -->
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
        <?php if (isset($_SESSION['auth'])): ?>
          <!-- Messages -->
          <li class="nav-item">
            <a class="nav-link active" href="messages.php">Messages</a>
          </li>
          <li class="nav-item">
            <!-- Products -->
            <a class="nav-link active" href="show-products.php">Products</a>
          </li>
        <?php endif; ?>
      </ul>

      <?php if (isset($_SESSION['auth'])): ?>
        <?php if (isset($_SESSION['time'])): ?>
          <!-- USERNAME AND SESSION TIME DETAILS  -->
          <span style="font-size: xx-small; font-weight:700"><?= "{$_SESSION['auth'][1]}, logged in : {$_SESSION['time']} "; ?></span><span style="width: 0.5rem;"></span>
        <?php endif; ?>
        <!-- Logout Button -->
        <form class="d-flex" action="logout.php" method="POST">
          <button class="btn btn-danger" name="logout" value="logout" type="submit">Logout</button>
        </form>
      <?php else: ?>
        <!-- Register Button -->
        <form class="d-flex" action="register.php" method="POST">
          <button class="btn btn-outline-primary" value="register" type="submit">Register</button>
        </form>
        <!-- spacer between register & login buttons -->
        <span style="width: 0.5rem;"></span>
        <!-- Login Button -->
        <form class="d-flex" action="login.php" method="POST">
          <button class="btn btn-primary" value="login" type="submit">Login</button>
        </form>
      <?php endif; ?>

    </div>
  </div>
</nav>