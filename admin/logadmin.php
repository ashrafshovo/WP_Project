<?php

session_start();
include_once '../config/db_connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:index.php");
}


if(isset($_POST['login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = "SELECT * FROM admin WHERE username='$username'";
	$result = $con->query($query);
	$row=$result->fetch_assoc();
	$count = $result->num_rows;
		
		if($count == 1 && $row['password'] == $password){
		
			$_SESSION['user'] = $row['id'];
			header("Location: home.php");
	    }

		else{

		echo "<script language=\"JavaScript\">\n";
		echo "alert('Username or Password was incorrect!');\n";
		echo "window.location='index.php'";
		echo "</script>";
        }
}

?>

