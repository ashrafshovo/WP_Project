<?php
session_start();

include 'config/db_connect.php';
if(isset($_SESSION['id']))
{
$id = $_SESSION['id'];
}

if (isset($_POST)) {
    
	$post_id=$id;	
	$parent_id =$_POST['parent_id'];
    $name = $_POST['comment_name'];
	$email = $_POST['comment_email'];
    $website = $_POST['comment_web'];
    $comment = $_POST['comment_text'];
	
	if(empty($name) || empty($email) || empty($website) || empty($comment)){
	
		echo "<script language=\"JavaScript\">\n";
		echo "alert('please fill out this fields');\n";
		echo "window.location='viewpost.php?id=$id'";
		echo "</script>";	
	}
	else{
	
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Invalid Email');\n";
			echo "window.location='viewpost.php?id=$id'";
			echo "</script>";	
		}
		else{
		
			$sql = $con->query("INSERT INTO comments(post_id,parent_id,name,email,website,comment) VALUES('$post_id','$parent_id','$name','$email','$website','$comment')");     
    
			header("Location:viewpost.php?id=$id");;
		}
}
}
	
?>

