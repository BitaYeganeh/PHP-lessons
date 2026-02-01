<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/	
// connect to the database
$servername = "db";
$username = "lionUser";
$password = "lionPass";
$dbname = "lionDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);	
}
// read data from the table
$query = "SELECT * FROM users";
$result = $conn->query($query);
// display the data	
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . "<br>";
	echo " username: " . $row["username"] . "<br>";
	echo " password: " . $row["password"] . "<br>";

}
}
else {
	echo "0 results";
}	
?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
