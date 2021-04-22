<html>
	<body>

		<form action="helloworld.php" method="post">
		<label for="number1">Number 1:</label><br>
		<input type="number" id="number1" name="number1"><br>
		<label for="number2">Number 2:</label><br>
		<input type="number" id="number2" name="number2">
		<input type="submit" name="submit" value="multiply">
		
		
	<?php
		
		$txt = "Hello World!"; 
		$name = "Nicole ";
		$i = 0;
		
		echo"<br>";
		echo"<br>";
		echo $txt;
		echo"<br>";
		echo $name;
		echo"<br>";
		echo "There are ".strlen("Nicole")." characters in my name.";
		
		$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		//for(i=0, i<ages, i++)
		//{
			//echo "Key=".$ages['Peter']
		//}
		echo"<br>";
		echo"<br>";
		echo"Key=Peter, ";
		echo"Value= ".$ages['Peter'];
		echo"<br>";
		echo"Key=Ben, Value=37";
		echo"<br>";
		echo"Key=Joe, Value=43";
			
			//FOR  "FROMPAGE.HTML"  
			function multiply($num1, $num2)
			{
				$total = $num1 * $num2;
				return $total;
			}
			
			if(isset($_POST['submit']) )
			{
				$number1 = $_POST['number1'];
				$number2 = $_POST['number2'];
				
				echo"<br>";
				echo"<br>";
				echo $number1." multiplied by ".$number2." is " .multiply($number1, $number2);
			}

	?>
	</body>
</html>

