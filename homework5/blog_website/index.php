<!-- 
      This homepage template was originally sourced from W3Schools.com.

      W3.CSS Website Templates
      -------------------------
      "We have created some responsive W3.CSS website templates for you to use.
      You are free to modify, save, share, and use them in all your projects."

      This version was tailored as needed for this PHP training project.

      Template link:
      https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_website&stacked=h
-->

<!-- HEADER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<!-- addTitleSection("Home Page") -->


<!-- show the error message received from logout URL jumping protection logic -->
<?php if (isset($_SESSION['auth'], $_SESSION['errors'])): ?>
   <div class="alert alert-danger col-12 mx-auto text-center mt-3 p-2">
      <h7><?= $_SESSION['errors'][0] ?></h7>
   </div>
<?php endif; ?>


<!-- WELCOME LOGIN MESSAGE -->
<?php if (isset($_SESSION['auth'], $_SESSION['success'])): ?>
   <div class="alert alert-success col-12 mx-auto text-center mt-3 p-2">
      <h7><?= $_SESSION['success'] ?></h7>
      <h7>Hi <?= $_SESSION['auth'][1] ?>, welcome to our website.</h7>
   </div>
<?php endif; ?>


<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
   <img src="assets/images/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
</div>



<!--\\\\\\\\\\\\ Work Row section /////////////-->

<!-- fetching the work history data from Json file -->
<?php
$filePath = "database/ourwork.json";
$ourWorkJson = file_get_contents($filePath);
$ourWorkArr = json_decode($ourWorkJson, 1);
?>

<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
   <!-- work introduction -->
   <div class="w3-quarter">
      <h2>Our Work</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </div>
   <!-- populating the work experience cards -->
   <?php foreach ($ourWorkArr as $work): ?>
      <div class="w3-quarter">
         <div class="w3-card w3-white">
            <img src="assets/images/<?= $work['image']; ?>" alt="Snow" style="width:100%">
            <div class="w3-container">
               <h4>Client <?= $work['client_id']; ?></h4>
               <h3><?= $work['client_name']; ?></h3>
               <h3><?= $work['title']; ?></h3>
               <p><?= $work['body']; ?></p>
            </div>
         </div>
      </div>
   <?php endforeach; ?>
</div>


<!--\\\\\\\\\\\\ Prices section /////////////-->

<!-- fetching the prices plans from Json file -->
<?php
$filePath = "database/prices.json";
$pricesJson = file_get_contents($filePath);
$pricesArr = json_decode($pricesJson, 1);
?>

<!-- Pricing plans Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
   <h2>PRICING</h2>
   <p>Choose a pricing plan that fits your needs.</p><br>
   <!-- plans columns starts here-->
   <?php foreach ($pricesArr as $plan): ?>
      <div class="w3-third w3-margin-bottom">
         <ul class="w3-ul w3-border w3-hover-shadow">
            <li class="w3-theme">
               <p class="w3-xlarge"><?= $plan['plan_name']; ?></p>
            </li>
            <li class="w3-padding-16"><b><?= $plan['storage']; ?>GB</b> Storage</li>
            <li class="w3-padding-16"><b><?= $plan['emails']; ?></b> Emails</li>
            <li class="w3-padding-16"><b><?= $plan['domains']; ?></b> Domains</li>
            <li class="w3-padding-16"><b><?= $plan['support']; ?></li>
            <li class="w3-padding-16">
               <h2 class="w3-wide"><i class="fa fa-usd"></i> <?= $plan['price']; ?></h2>
               <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-theme-l5 w3-padding-24">
               <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
            </li>
         </ul>
      </div>
   <?php endforeach; ?>
   <!-- plans columns ends here -->
</div>


<!-- Clearing out temporary S_SESSION[] variables -->
<?php
   unset($_SESSION['success']);
   unset($_SESSION['errors']);
?>

<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>