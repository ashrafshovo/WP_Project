<!DOCTYPE html>
<html ln="eng">
<head>
<head>
	<title>TechForum Admin Panel</title>
	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

	
	
	
	
			<script type="text/javascript">

	function delete_id6(id)
{
     if(confirm('Are you sure you want to remove this post?'))
     {
        window.location.href='delete-comment.php?delete_id6='+id;
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
  	<li role="presentation"><a href="admin.php">Admin</a></li>
		<li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		<li role="presentation"><a href="viewcomment.php">View Comments</a></li>
		<li role="presentation"><a href="Category.php">View Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation" class="active"><a>View Post</a></li>
  		<li role="presentation" ><a href="viewuser.php">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">View Post</h3>
		  </div>
		<div class="panel-body">

<?php

include '../config/db_connect.php';

$sql = "select * from blog_post";
$result = $con->query($sql);
$posts = array();

	while ($row = $result->fetch_assoc()) {
		$posts[] = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'title' => $row['postTitle'],
			'type' => $row['type'],
			'image' => $row['image'],
			'date' => $row['postDate']
		);
	}

?>

			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>Name</th>
			  		<th>Post Title</th>
			  		<th>Type</th>
			  		<th>Image</th>
			  		<th>Post Date</th>
			  		<th>Actions</th>
					<th>Actions</th>
			  	</thead>
			  	<tbody>
			  	<?php foreach ($posts as $post): ?>
			  		<tr>
			  			<td><?php echo $post['id']; ?></td>
				  		<td><?php echo $post['name']; ?></td>
				  		<td><?php echo $post['title']; ?></td>
				  		<td><?php echo $post['type']; ?></td>
				  		<td><?php echo $post['image']; ?></td>
				  		<td><?php echo $post['date']; ?></td>
				  		<td>
				  			<a href="javascript:delete_id6(<?php echo $post['id']; ?>)">Delete</a>
				  		</td>
						<td>
				  			<a href="edit-post.php?id=<?php echo $post['id']; ?>">Edit</a>
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