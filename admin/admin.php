<!DOCTYPE html>
<html>
<head>
	<title>TechForum Admin Panel</title>

	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
			<script type="text/javascript">

	function delete_id1(id)
{
     if(confirm('Are you sure you want to remove this comment?'))
     {
        window.location.href='delete-comment.php?delete_id1='+id;
     }
}

	function delete_id2(id)
{
     if(confirm('Are you sure you want to remove this discussion?'))
     {
        window.location.href='delete-comment.php?delete_id2='+id;
     }
}

</script>

	
	
	
</head>
<body>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
		<li role="presentation"><a href="home.php">Home</a></li>
  		<li role="presentation" class="active"><a>Admin</a></li>
		 <li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		 <li role="presentation"><a a href="viewcomment.php">View Comment</a></li>
		 <li role="presentation"><a href="Category.php">View Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation"><a href="viewpost.php">View Post</a></li>
  		<li role="presentation"><a href="viewuser.php">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Admin Panel</h3>
		  </div>
		<div class="panel-body">

		 
		 <div class ="tab">
						<ul id="tabnav" class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">All admin</a></li>
							<li><a data-toggle="tab" href="#menu1">Add admin</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">

							<?php

							include 'config/db_connect.php';

							$sql = "select * from admin";
							$result = $con->query($sql);
							$posts = array();

							while ($row = $result->fetch_assoc()) {
							$admins[] = array(
							'id' => $row['id'],
							'username' => $row['username'],
							'about' => $row['About']
							);
							}

							?>
						<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>USERNAME</th>
					<th>ABOUT</th>
			  	</thead>
							
							
							
							<?php foreach ($admins as $admin): ?>
			  		<tr>
			  			<td><?php echo $admin['id']; ?></td>
				  		<td><?php echo $admin['username']; ?></td>
						<td><?php echo $admin['about']; ?></td>
				  		
					
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">
							
							
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
































							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						
						
		 
		 
		 
		
		
		</div>
	</div>
</div>

</body>
</html>



