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
		<li role="presentation"><a href="home.php">Home</a></li>
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

include_once '../config/db_connect.php';

if(isset($_POST['submit']))
{


 

	$postTitle =$con->real_escape_string($_POST['postTitle']);
	
	$type = $con->real_escape_string($_POST['type']);
	$postCont =$con->real_escape_string($_POST['postCont']);
	
	$postTitle = trim($postTitle);

    $ima = $_FILES['image']['name'];
    $imup=$_FILES['image']['tmp_name'];

    $image="upload/$ima";
    move_uploaded_file($imup, $image);
	
	
	
    $name="Team TechForum";
	
	$type = trim($type);
	$postCont = trim($postCont);
	$image=trim($image);
    $name=trim($name);
	
	
	

		
	
	$query = "SELECT postTitle FROM blog_post WHERE postTitle='$postTitle'";
	$result = $con->query($query);
	
	$count = $result->num_rows; // if email not found then register
	
	if($count == 0){
		
		if($con->query("INSERT INTO blog_post(name,postTitle,postCont,type,image) VALUES('$name','$postTitle','$postCont','$type','$image')"))
		{
			header("Location: viewpost.php");
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
			<script>alert('Sorry This post already exist here...');</script>
			<?php
	}
	
}




?>






























	<div id="form">
		
		<h1>Add Post</h1>
        <form method="post" enctype="multipart/form-data" action="">

		<p><label>Title</label><br /></p>
		<tr>
       <p><td><input type="text" name="postTitle" placeholder="" required/></td></p>
      </tr>
	  
	  
	  <p><label>Type</label><br /></p>
	<tr>

     <p><td>
      <select id="radio" name="type" placeholder="" required>
      <option value="0" selected="selected" disabled="disabled">(Select one)</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Internet" >Internet</option>
      </select>
	  </td></p>
	</tr>







	  
	  
	  
	  <p><label>Image</label><br /></p>
		<tr>
       <p><td><input type="file" name="image" placeholder="" required/></td></p>
      </tr>
	 
		
		
		
		
		<p><label>Content</label><br /></p>
		<tr>
		<p><textarea name='postCont' cols='80' rows='10' placeholder="" required></textarea></p>
		</tr>
		
		<tr>
        <td><button type="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>




</body>
</html>