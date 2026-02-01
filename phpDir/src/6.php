<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php

		/*  Step1: Make a form that submits one value to POST super global


 */
// Step 1: Check if the form is submitted
if (isset($_POST["username"])) {
  echo "You entered: " . $_POST["username"];
}
		?>
<form method="POST" action="">
  <label for="username">Enter your name:</label>
  <input type="text" id="username" name="username" required>
  <input type="submit" value="Submit">
</form>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>