<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
// Step 1: If statement with elseif and else
		$language="PHP";
		if ($language == "Java") {
			echo "I love Java";
		} elseif ($language == "Python") {
			echo "I love Python";
		} else {
			echo "I love PHP";
		}
		echo "<br>";

		//step 2: For loop to display 10 numbers
		for ($i=0; $i <= 10; $i++) { 
			echo $i . " ";
		}
		echo "<br>";
		// Step 3: Switch statement with 5 cases
		switch ($language) {
			case "Java":
				echo "You selected Java";
				break;
			case "Python":
				echo "You selected Python";
				break;
			case "C++":
				echo "You selected C++";
				break;
			case "JavaScript":
				echo "You selected JavaScript";
				break;
			case "PHP":
				echo "You selected PHP";
				break;
				
				
				}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>