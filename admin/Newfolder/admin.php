<?php

session_start();
include_once '../config/db_connect.php';

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = "SELECT * FROM admin WHERE adminemail='$email'";
	$result = $con->query($query);
	$row=$result->fetch_assoc();
	$count = $result->num_rows;
		
		if($count == 1 && $row['password'] == $password){
		
			$_SESSION['user'] = $row['id'];
			header("Location: index.php");
	    }

		else{

		echo "<script language=\"JavaScript\">\n";
		echo "alert('Email or Password was incorrect!');\n";
		echo "window.location='index.php'";
		echo "</script>";
        }
}


?>