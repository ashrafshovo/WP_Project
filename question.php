<?php
 
session_start();
 
include_once 'config/db_connect.php';

if(isset($_POST['submit']))
{

	if(empty($_POST['source'])){

	
   echo "<script language=\"JavaScript\">\n";
   echo "alert('please! select a catagory');\n";
   echo "window.location='ask.php'";
   echo "</script>";
    
	
   } 

	$title =$con->real_escape_string($_POST['title']);
	$category = $con->real_escape_string($_POST['source']);
	$description =$con->real_escape_string($_POST['description']);
	
	
	if(empty($title) || empty($description)){

	   echo "<script language=\"JavaScript\">\n";
	   echo "alert('Error! Please fill out this field');\n";
	   echo "window.location='ask.php'";
	   echo "</script>";
		  	
	}
	
	else{
	
	
	
	
	$id=$_SESSION['user'];

    $sql="SELECT * FROM users WHERE id=$id";
    $res=$con->query($sql);
    $userRow=$res->fetch_assoc();

	$user_id=$userRow['id'];
	$name=$userRow['name'];
    
	if ($userRow['category']='computer') {
		$category_id=1;
	}
	if ($userRow['category']='mobile') {
		$category_id=2;
	}
	if ($userRow['category']='network') {
		$category_id=3;
	}
	if ($userRow['category']='security') {
		$category_id=4;
	}	
	if ($userRow['category']='gaming') {
		$category_id=5;
	}	
	if ($userRow['category']='electronics') {
		$category_id=6;
	}
	if ($userRow['category']='internet') {
		$category_id=7;
	}



	
	$sql="INSERT INTO forum(user_id,category_id,name,title,category,description) VALUES('$user_id','$category_id','$name','$title','$category','$description')";
	
	
	if($con->query($sql))
		{
			header("Location: techforum.php");
		}
		else
		{
			
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Error!');\n";
        echo "window.location='question.php'";
        echo "</script>";
      
		}
	
	
	
	}
	}
	


?>








