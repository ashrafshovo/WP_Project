<!DOCTYPE html>
<html>
<head>
	<title>TechForum Admin Panel</title>

	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	
		<script type="text/javascript">

	function delete_id4(id)
{
     if(confirm('Are you sure you want to remove this user?'))
     {
        window.location.href='delete-comment.php?delete_id4='+id;
     }
}


</script>
	
</head>
<body>

<?php 
	
include '../config/db_connect.php';
	
	$sql = "select * from users";
	$result = $con->query($sql);
	$users = array();
	
	while ($row = $result->fetch_assoc()) {
		$users[] = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'user' => $row['username'],
			'email' => $row['email']
		);
	}

?>

<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
		<li role="presentation"><a href="home.php">Home</a></li>
  		<li role="presentation"><a href="admin.php">Admin</a></li>
		<li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		<li role="presentation"><a href="viewcomment.php">View Comments</a></li>
		<li role="presentation"><a href="Category.php">View Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation"><a href="viewpost.php">View Post</a></li>
  		<li role="presentation" class="active"><a>View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">View User</h3>
		  </div>
		<div class="panel-body">
			
			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>Name</th>
			  		<th>Username</th>
			  		<th>Email</th>
			  		<th>Actions</th>
			  	</thead>
			  	<tbody>
			  	<?php foreach ($users as $user): ?>
			  		<tr>
			  			<td><?php echo $user['id']; ?></td>
				  		<td><?php echo $user['name']; ?></td>
				  		<td><?php echo $user['user']; ?></td>
				  		<td><?php echo $user['email']; ?></td>
				  		<td>
				  			<a href="javascript:delete_id4(<?php echo $user['id']; ?>)">Delete</a>
				  		</td>
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>