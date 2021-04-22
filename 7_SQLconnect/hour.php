<?php

	$t = time();
	
	echo "Hello, current time is ".$t.".<br>";
	
	if($_POST['hour'] > 1200)
	{
		echo"Good Evening!";
	}
	
	if($_POST['hour'] < 1200)
	{
		echo"Good Morning!";
	}
	
?>