<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'login_db');
	
	
		$username=$_POST['username'];
		$password=$_POST['password'];

	$q="SELECT * FROM user where username='$username' && password='$password' ";
	$result=mysqli_query($con,$q);
	
	$num=mysqli_num_rows($result);
	
	if($num==1)
	{
		$_SESSION['username']=$username;
		header('location:http://localhost/BRMapp/view.php');
	}
	else{
		header('location:http://localhost/login_ex/login.php');
	}
	mysqli_close($con);
?>