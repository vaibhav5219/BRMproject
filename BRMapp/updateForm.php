<?php
	session_start();
    if(!isset($_SESSION['username']))
	{
		header('location:http://localhost/login_ex/login.php');
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm_db');
	$q="select * from book";
	$result=mysqli_query($con,$q);
	
	$num=mysqli_num_rows($result);
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Book Record</title>
	<link rel="stylesheet" href="./CSS/viewStyle.css" />
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
  
	<form action="updation.php" method="POST">
	<div id="main">
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		
		<tr>
			<?php
				for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
			?>
				
			<tr>
				<td><?php echo $row['bookid'];?> 
					<input type="hidden" name="bookid<?php echo $i;?>"   value="<?php echo $row['bookid'];?>"  /></td>
				<td><input type="text"   name="title<?php echo $i; ?>"   value="<?php echo $row['title'];?>" /></td>
				<td><input type="text"   name="price<?php echo $i;?>"    value="<?php echo $row['price'];?>"  /></td>
				<td><input type="text"   name="author<?php echo $i;?>"   value="<?php echo $row['author'];?>" /></td>
			</tr>
			<?php
				}
			?>
			<td></td><td></td><td><input type="submit" value="Update"></td><td></td>
		</tr>
	</table>
		<div>
	</form>
</body>