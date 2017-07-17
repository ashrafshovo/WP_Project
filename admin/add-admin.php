<!DOCTYPE html>
<html ln="eng">
<head>
<head>
	<title>TechForum Admin Panel</title>
	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

</head>
<body>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
		<li role="presentation"><a href="admin.php">Admin</a></li>
  		<li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		<li role="presentation"><a href="viewcomment.php">View Comments</a></li>
		<li role="presentation"><a href="Category.php">View Category</a></li>
  		<li role="presentation" class="active"><a>Add Post</a></li>
  		<li role="presentation"><a href="viewpost.php">View Post</a></li>
  		<li role="presentation" ><a href="viewuser.php">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Add Post</h3>
		  </div>
		<div class="panel-body">

<?php

include_once 'config/db_connect.php';

if(isset($_POST['submit']))
{


 

	$name =$con->real_escape_string($_POST['name']);
	$about =$con->real_escape_string($_POST['about']);
	
	$password = $con->real_escape_string($_POST['password']);
	
	
    $ima = $_FILES['image']['name'];
    $imup=$_FILES['image']['tmp_name'];

    $image="admin-pic/$ima";
    move_uploaded_file($imup, $image);
	
	
	
		
	
	$query = "SELECT name FROM admin WHERE username='$name'";
	$result = $con->query($query);
	
	$count = $result->num_rows; // if email not found then register
	
	if($count == 0){
		
		if($con->query("INSERT INTO admin(about,username,image,password) VALUES('$about','$name','$image','$password')"))
		{
			header("Location: admin.php");
		}
		else
		{
			?>
			<script>alert('error...');</script>
			<?php
		}		
	}
	
	else{
			?>
			<script>alert('Sorry This users already exist here...');</script>
			<?php
	}
	
}




?>






























	<div id="form">
		
		<h1>Add Admin</h1>
        <form method="post" enctype="multipart/form-data" action="">

		<p><label>Name</label><br /></p>
		<tr>
       <p><td><input type="text" name="name" placeholder="" required/></td></p>
      </tr>
	  
	  <p><label>About</label><br /></p>
		<tr>
       <p><td><textarea name='about' cols='80' rows='10' placeholder="" required> </textarea></td></p>
      </tr>
	  
	  <p><label>Image</label><br /></p>
		<tr>
       <p><td><input type="file" name="image" placeholder="" required/></td></p>
      </tr>
	 
	 <p><label>Password</label><br /></p>
		<tr>
       <p><td><input type="text" name="password" placeholder="" required/></td></p>
      </tr>
	  
	  
	 
	 
	 
		<tr>
        <td><button type="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>




</body>
</html>