<?php
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname = "firstdb"; //this is what allows you to actually connect to the database -same name as ur DB on phpAdmin
	
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
	//require_once "db.php";              (wasnt sure what this line of code does so i left it out but its in her notes)
	if ( isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['age'])) 
	{
		$u = $_POST['username']; //set 
		$p = $_POST['password'];
		$f = $_POST['firstname'];
		$l = $_POST['lastname'];
		$a = $_POST['age'];
		
		$sql= "INSERT INTO users (USERNAME, PASSWORD, FIRSTNAME, LASTNAME, AGE) VALUES ('$u', '$p', '$f', '$l', '$a')";
		
	if ($conn->query($sql) === TRUE)
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql. "<br>" . $conn->error; }$conn->close(); 
	}

?>