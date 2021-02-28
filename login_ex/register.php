<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'login_db');
	
	$username=$_POST['username'];
	$password=$_POST['password'];

		$q="INSERT INTO user(username,password) values('$username','$password')";
		$status=mysqli_query($con,$q);
		
	if($status==1)
		header('location:http://localhost/login_ex/home.php');
	else
		header('location:http://localhost/login_ex/signup.php');
	mysqli_close($con);

?>