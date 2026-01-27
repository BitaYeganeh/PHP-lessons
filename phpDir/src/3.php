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
	$love = "PHP";
	if ($love == "Java") {
		echo "I love Java";
	} elseif ($love == "Python") {
		echo "I love Python";
	} elseif ($love == "PHP") {
		echo "I love PHP";
	} else {
		echo "I love Coding";
	}

	echo "<br>For Loop Output: ";
	for ($i = 1; $i <= 10; $i++) {
		echo $i . ", ";
	}
	
	echo "<br>Switch Statement Output: ";
	$day = 3;
	switch ($day) {
		case 1:
			echo "Monday";
			break;
		case 2:
			echo "Tuesday";
			break;
		case 3:
			echo "Wednesday";
			break;
		case 4:
			echo "Thursday";
			break;
		case 5:
			echo "Friday";
			break;
		default:
			echo "Weekend";
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>