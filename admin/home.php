<!DOCTYPE html>
<html ln="eng">
<head>
<head>
	<title>TechForum Admin Panel</title>
	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="assets/style.css">
</head>
<body>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
  		<li role="presentation" class="active"><a>Home</a></li>
		<li role="presentation"><a href="admin.php">Admin</a></li>
		<li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		<li role="presentation"><a href="viewcomment.php">View Comments</a></li>
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

		<center><h3>Welcome!!! to TechForum Admin Panel...</h3>
		<p>Now you can control the TechForum as an admin...</p></center>
         
		 
		     <?php include 'review.php'; ?>
		 	 
				<div class="col-xs-12">
					<div class="row">
				    
					<div class="col-xs-2">
                            <div class="stat-box1">
                                <h4>Visitors</h4>
                                <h1><?php echo $visitors; ?></h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box2">
                                <h4>Files</h4>
                                <h1><?php echo $filecount; ?></h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box3">
                                <h4>Users</h4>
                                <h1><?php echo $users; ?></h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box4">
                                <h4>Discussions</h4>
                                <h1><?php echo $discussion; ?></h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box5">
                                <h4>Posts</h4>
                                <h1><?php echo $post; ?></h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box6">
                                <h4>Comments</h4>
                                <h1><?php echo $comments; ?></h1>
                            </div>
                     </div>
						

					 
					</div>
					
					
					</div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		</div>
	</div>
</div>

</body>
</html>



