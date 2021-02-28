<?php
	session_start();
	session_destroy();
	header('location:http://localhost/login_ex/login.php');
?>