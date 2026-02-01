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
// Step 1: Use a pre-built math function (sqrt) and echo the result
$number = 16;
$squareRoot = sqrt($number);
echo "The square root of " . $number . " is: " . $squareRoot . "<br>";
// Step 2: Use a pre-built string function (strtoupper) and echo the result
$string = "hello world";
$upperString = strtoupper($string);
echo "The uppercase version of '" . $string . "' is: " . $upperString . "<br>";
// Step 3: Use a pre-built array function (count) and echo the result
$array = array(1, 2, 3, 4, 5);
$arrayCount = count($array);
echo "The number of elements in the array is: " . $arrayCount; 
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>