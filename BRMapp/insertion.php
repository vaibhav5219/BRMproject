<?php
	$title=$_POST['title'];
	$price=$_POST['price'];
	$author=$_POST['author'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm_db');
	
	$q="INSERT INTO Book(title,price,author) values('$title',$price,'$author')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
	<link type="text/css" rel="stylesheet" href="./CSS/viewStyle.css" >
</head>
<body>
	<div id="header">
      <h1>Book Record Management</h1>
      <div id="nav">
          <a href="view.php">View All</a>
          <a href="insertForm.php">Add New</a>
          <a href="deleteForm.php">Delete</a>
          <a href="updateForm.php">Update</a>
		  <a href="http://localhost/login_ex/register.php">Sign UP</a>
		  <a href="http://localhost/login_ex/login.php">Log IN</a>
      </div>
    </div>
	<p> <?php if($status==1) echo"record inserted"; else echo "Insertion Failed";?></p>
	if you want to insert more record <a href="insertForm.php">Click Here</a>
</body>