<?php

session_start();
include_once 'config/db_connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:techforum.php");
}

if(isset($_POST['btn-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$query = "SELECT * FROM users WHERE username='$username'";
	$result = $con->query($query);
	$row=$result->fetch_assoc();
	$count = $result->num_rows;
		
		if(isset($_SESSION['id']))
		{
		$id=$_SESSION['id'];
		}	

		if($count == 1 && $row['password'] == $password){
		    
			if($id==TRUE){
			header("Location: post.php?id=$id");
			$_SESSION['user'] = $row['id'];
			}
			else{
			
			$_SESSION['user'] = $row['id'];
			header("Location: techforum.php");
	       }
		}
		else{

		echo "<script language=\"JavaScript\">\n";
		echo "alert('Username or Password was incorrect!');\n";
		echo "window.location='login.php'";
		echo "</script>";
        }
}

?>