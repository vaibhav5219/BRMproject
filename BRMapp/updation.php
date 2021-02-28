<?php
	$size=sizeof($_POST);
	$record=$size/4;
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm_db');
	
	for($i=1;$i<=$record;$i++)
	{
		$index1="bookid".$i;
		$bookid[$i]=$_POST[$index1];
		$index2="title".$i;
		$title[$i]=$_POST[$index2];
		$index3="price".$i;
		$price[$i]=$_POST[$index3];
		$index4="author".$i;
		$author[$i]=$_POST[$index4];
	}
	for($i=1;$i<=$record;$i++)
	{
	$q="update book SET title='$title[$i]', price=$price[$i], author='$author[$i]' where bookid=$bookid[$i]";
	mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
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
      </div>
    </div>
	<p> <?php  echo $record." Records updated";?></p>
	Go back to home page <a href="home.php">Click Here</a>
</body>