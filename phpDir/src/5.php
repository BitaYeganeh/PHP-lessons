<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	echo "Square root of 16 is: " . sqrt(16) . "<br>";
// use a pre-built string function and echo it
 echo "The length of the string 'Hello World' is ".strlen("Hello World");
 echo "<br>";

 // use a pre-built Array function and echo it
 $arr = array("Bita", "Ahmad", "Rayan");
 echo "The array is: ".implode(", ", $arr);
 echo "<br>";

  echo "Number of elements in the array is: " . count($arr);
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>