<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

//step 1: Define a function that returns the sum of two numbers
function sum() {
	$number1=10;
	$number2=20;
	return $number1 + $number2;
}
	//display the result of the sum function
echo sum();
echo "<br>";	
//step 2: Define a function that takes parameters and returns their product
function multiply($number1, $number2) {
	return $number1 * $number2;
}
	//call the multiply function with parameter values and display the result
echo "the multiply(5, 4) is: " . multiply(5, 4);

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>