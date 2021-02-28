<!DOCTYPE HTML>
<html>
	<head>
		<title> Sign Up</title>
		<link type="text/css" rel="stylesheet" href="./CSS/viewStyle.css" >
	</head>
	<body>
	    <div id="header">
      <h1>Book Record Management</h1>
      <div id="nav">
          <a href="http://localhost/BRMapp/view.php">View All</a>
          <a href="http://localhost/BRMapp/insertForm.php">Add New</a>
          <a href="http://localhost/BRMapp/deleteForm.php">Delete</a>
          <a href="http://localhost/BRMapp/updateForm.php">Update</a>
		  <a href="http://localhost/login_ex/login.php">Log IN</a>
      </div>
    </div>
  
	<div id="main">
	<table id="view_table">
		<h2> Sgn up</h2>
		<form action="register.php" method="POST">
			<tr>
				<td>username :	</td>
				<td><input type="text" name="username" placeholder="username" required /> </td>
			</tr>
			<tr>
				<td>password :	</td>
				<td><input type="password" name="password" placeholder="password" required /> </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="Sign UP" /> </td>
			</tr>
		</form>
	</table>
<div>
	</body>
</html>