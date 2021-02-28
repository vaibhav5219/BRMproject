<?php 
session_start();
if(!isset($_SESSION['username']))
	{
		header('location:http://localhost/login_ex/login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion Form</title>
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
 
	<form action="insertion.php" method="POST">
	<div id="main">
		<table id="view_table">
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required /></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required /></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" required /></td>
			</tr>
						<tr>
				<th></th>
				<td><input type="submit" value="Insert" /></td>
			</tr>
		</table>
		</div>
	</form>
</body>
</html>