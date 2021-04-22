<html>
	<body>
		<form action="add.php" method="post">
		<label for="PName">PName:</label><br>
		<input type="text" id="PName" name="PName"><br>
		<label for="Description">Description:</label><br>
		<input type="text" id="Description" name="Description"><br>
		<label for="Price">Price:</label><br>
		<input type="text" id="Price" name="Price"><br>
		<label for="Stock">Stock:</label><br>
		<input type="text" id="Stock" name="Stock"><br>
		<input type="submit" name="submit" value="Enter">
		<br>
	</body>
</html>

<?php
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname = "product"; //this is what allows you to actually connect to the database -same name as ur DB on phpAdmin
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected to database successfully <br><br>";
	}
	
	//Enter data from form into database
	//require_once "db.php";              
	if ( isset($_POST['PName']) && isset($_POST['Description'])&& isset($_POST['Price']) && isset($_POST['Stock']) )
	{
		$u = $_POST['PName']; //set 
		$p = $_POST['Description'];
		$f = $_POST['Price'];
		$l = $_POST['Stock'];
		
		$sql= "INSERT INTO productID (PName, Description, Price, Stock) VALUES ('$u', '$p', '$f', '$l')";
		
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql. "<br>" . $conn->error; }$conn->close(); 
	}
	
?>