<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./CSS/viewStyle.css" />
</head>
<body>
	<div id="header">
      <h1>Book Record Management</h1>
      <div id="nav">
          <a href="http://localhost/BRMapp/view.php">View All</a>
          <a href="http://localhost/BRMapp/insertForm.php">Add New</a>
          <a href="http://localhost/BRMapp/deleteForm.php">Delete</a>
          <a href="http://localhost/BRMapp/updateForm.php">Update</a>
		  <a href="http://localhost/login_ex/register.php">Sign UP</a>
      </div>
    </div>
  <div id="main">
	<form action="validation.php" method="POST" >
				<h2>Log In</h2>
	<table id="view_table">
		<tr>
			<td> Username : </td>
			<td><input type="text" name="username" placeholder="username" required /><br/></td>
		</tr>
		<tr>
			<td>Password : </td>	
			<td><input type="password" name="password" placeholder="password" required  /><br/></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Log In"></td>
		</tr>
	</table>	
	</form>
	<div>
</body>