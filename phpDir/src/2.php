<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		// Step 1: Create two variables and assign them values
		$number1 = 10; //10 IS A INTEGER
		$number2 = 20;

		// Step 2: Add the two variables and display the result
		$sum = $number1 + $number2;
		echo $sum . "<br>";

		// Step 3: Create a regular (indexed) array
		$regularArray = array(10, 20, 30);
		echo  "Regular Array Elements: " . implode(", ", $regularArray) . "<br>"; // implode is equal to split in js
		// Step 3: Create an associative array with the same values
		$associativeArray = array(
		"first" => 10,
		"second" => 20,
		"third" => 30
		);
		
		echo "Associative Array Elements: " . implode(", ", $associativeArray) . "<br>";
		//put space here 
		echo "<br>";
		foreach ($associativeArray as $key => $value) {
		  echo "Key: " . $key . ", Value: " . $value . "<br>";
		}
		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>