
<?php

include_once '../config/db_connect.php';

if(isset($_POST['submit'])){
 

	$postTitle =$con->real_escape_string($_POST['postTitle']);
	$type = $con->real_escape_string($_POST['type']);
	$postCont =$con->real_escape_string($_POST['postCont']);

    $id=$_GET['id'];
	$sql="UPDATE blog_post SET postTitle='$postTitle',postCont='$postCont',type='$type' WHERE id=$id";
	
	if($con->query($sql)== TRUE){
	
	header("Location: viewpost.php");
	
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
		 <li role="presentation"><a>View Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation" class="active"><a href="viewpost.php">Edit Post</a></li>
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
	
	$sql="select * from blog_post where id=$id";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	
	?>	
		
	<div id="form">
		
		<h1>Add Post</h1>
        <form method="post" enctype="multipart/form-data" action="">

		<p><label>Title</label><br /></p>
		<tr>
       <p><td><input type="text" name="postTitle" value="<?php echo $row['postTitle']; ?>" required/></td></p>
      </tr>
	  
	  
	  <p><label>Type</label><br /></p>
	<tr>

     <p><td>
      <select id="radio" name="type" value="<?php echo $row['type']; ?>" required>
      <option selected="selected" disabled="disabled">(Select one)</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Internet" >Internet</option>
      </select>
	  </td></p>
	</tr>
	  
	  
	  
		
		
		<p><label>Content</label><br /></p>
		<tr>
		<p><textarea name='postCont' cols='80' rows='10' placeholder="" required><?php echo $row['postCont']; ?></textarea></p>
		</tr>
		
		<tr>
        <td><button type="submit" name="submit">submit</button></td>
        </tr>

	</form>
	
	</div>



</div>
</div>
</div>
</body>
</html>