
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
	
	//Enter data from database          
	//if ( isset($_POST['PName']) && isset($_POST['Description'])&& isset($_POST['Price']) && isset($_POST['Stock']) ) 
	
		
		$sql= "SELECT * PName, Description, Price, Stock FROM product";
		$result = $conn->query($sql);         //PROBLEM ON THIS LINE WOULD NOT TAKE $SQL VARAIBLE FOR SOME REASON
		//output data of each row in table
		if ($result->num_rows > 0)
		{
			echo "<table border ='1'>";
			while($row = $result->fetch_assoc() )
			{
				echo"<tr><td>";
				echo($row["PName"]);
				echo"</tr><td>";
				echo($row["Description"]);
				echo"</tr><td>";
				echo($row["Price"]);
				echo"</tr><td>";
				echo($row["Stock"]);
				echo"</tr><\n>";
			}
			echo "</table>\n";
		}
		else{
			echo "0 results";
		}
		
	

	
	//echo " <a href="indexpage.html">Back to Index</a><br><br> ";

?>