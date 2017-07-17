
<?php

include_once 'config/db_connect.php';

if(isset($_POST['submit'])){
 

	$category =$con->real_escape_string($_POST['category']);
	
	
    $id=$_GET['id'];
	$sql="UPDATE category SET category_name='$category' WHERE category_id=$id";
	
	if($con->query($sql)== TRUE){
	
	header("Location: category.php");
	
	}
		
	else{
		
		
		echo "error";
}

}

?>




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
		 <li role="presentation"><a href="viewcomment.php">View Comment</a></li>
		 <li role="presentation" class="active"><a href="category.php">Edit Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation"><a href="viewpost.php">View Post</a></li>
  		<li role="presentation"><a href="viewuser.php">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Add Post</h3>
		  </div>
		<div class="panel-body">

	<?php 
	
	$id=$_GET['id'];
	
	$sql="select * from category where category_id=$id";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	
	?>	
		
	<div id="form">
		
		<h1>Edit category</h1>
        <form method="post" enctype="multipart/form-data" action="">

       <p><td><input type="text" name="category" value="<?php echo $row['category_name']; ?>" required/></td></p>
      
	  <button type="submit" name="submit" class="btn btn-info btn-lg" role="button">submit</button>
        
	</form>
	
	</div>




</body>
</html>