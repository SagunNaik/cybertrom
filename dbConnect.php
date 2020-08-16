<?php
	$db="cybertrom_user_db";
	$username="root";
	$password="";
	$host="localhost";
	
	#create conection...
	$conn=mysqli_connect($host,$username,$password,$db);

	if(!$conn)
	{
		die("Failed to connect: " . mysqli_connect_error());
	}
	/*
	else{
		echo '<script>alert("login Successfull... Hello");</script>';
	}
	*/
?>