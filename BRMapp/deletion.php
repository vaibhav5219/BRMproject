<?php
	$size=sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++,$j++)
	{
		$index="b".$j;
		if(isset($_POST[$index]))
		{
			$b_id[$i]=$_POST[$index];
		}
		else
			$i--;
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm_db');
	
	for($k=1;$k<=$size;$k++)
	{
	$q="delete from book where bookid=".$b_id[$k];
	mysqli_query($con,$q);
	}
	mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
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
	<p> <?php  echo $size." Record deleted";?></p>
	Go back to home page <a href="home.php">Click Here</a>
</body>