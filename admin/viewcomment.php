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
  		<li role="presentation"><a href="admin.php">Admin</a></li>
		 <li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		 <li role="presentation"  class="active"><a>View Comment</a></li>
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
							<li class="active"><a data-toggle="tab" href="#home">Blog post comment</a></li>
							<li><a data-toggle="tab" href="#menu1">Forum post Discussion</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">

							<?php

							include 'config/db_connect.php';

							$sql = "select * from comments";
							$result = $con->query($sql);
							$posts = array();

							while ($row = $result->fetch_assoc()) {
							$comments[] = array(
							'comment id' => $row['id'],
							'post id' => $row['post_id'],
							'parent id' => $row['parent_id'],
							'name' => $row['name'],
							'email' => $row['email'],
							'comment' => $row['comment'],
							'date' => $row['date']
							);
							}

							?>
						<table class="table table-bordered">
			  	<thead>
			  		<th>Comment ID</th>
			  		<th>Post ID</th>
					<th>Parent ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Comment</th>
					<th>Date</th>
					<th>Action</th>
			  	</thead>
							
							
							
							<?php foreach ($comments as $comment): ?>
			  		<tr>
			  			<td><?php echo $comment['comment id']; ?></td>
				  		<td><?php echo $comment['post id']; ?></td>
						<td><?php echo $comment['parent id']; ?></td>
						<td><?php echo $comment['name']; ?></td>
						<td><?php echo $comment['email']; ?></td>
						<td><?php echo $comment['comment']; ?></td>
						<td><?php echo $comment['date']; ?></td>
				  		<td>
				  			<a href="javascript:delete_id1(<?php echo $comment['comment id']; ?>)">Delete</a>
				  		</td>
					
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">
							
							
<?php
                            session_start();
							include 'config/db_connect.php';
                            
							$sqls = "select * from reply";
							$results = $con->query($sqls);
							$replys = array();

							while ($rows = $results->fetch_assoc()) {
							$replys[] = array(
							'id' => $rows['id'],
							'forum post id' => $rows['forum_post_id'],
							'name' => $rows['name'],
							'description' => $rows['description'],
							'date' => $rows['date']
							);
							$_SESSION['forum'] = $rows['forum_post_id'];
							}

							?>		

			<table class="table table-bordered">
			  	<thead>
			  		<th>ID</th>
			  		<th>Forum Post ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Date</th>
					<th>Action</th>
			  	</thead>
							
							<?php foreach ($replys as $reply): ?>
			  		<tr>
			  			<td><?php echo $reply['id']; ?></td>
				  		<td><?php echo $reply['forum post id']; ?></td>
						<td><?php echo $reply['name']; ?></td>
						<td><?php echo $reply['description']; ?></td>
						<td><?php echo $reply['date']; ?></td>
				  		<td>
				  			<a href="javascript:delete_id2(<?php echo $reply['id']; ?>)">Delete</a>
				  		</td>
					
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
		
							
							
							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						
						
		 
		 
		 
		
		
		</div>
	</div>
</div>

</body>
</html>



