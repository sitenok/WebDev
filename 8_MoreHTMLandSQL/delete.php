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
		
		$sql= "INSERT INTO product (PName, Description, Price, Stock) VALUES ('$u', '$p', '$f', '$l')";
		
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql. "<br>" . $conn->error; }$conn->close(); 
	}