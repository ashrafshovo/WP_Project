<!DOCTYPE html>
<html>
<head>
	<title>TechForum Admin Panel</title>

	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../techforum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
  		<li role="presentation" class="active"><a href="index.php">Log In</a></li>
	</ul>

	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Admin Log In System</h3>
		  </div>
		<div class="panel-body">
		  	<form method="POST" action="logadmin.php">
				<div class="form-group">
				    <label for="start">Username: </label>
				    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
				</div>
				<div class="form-group">
				    <label for="end">Password: </label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				  
				<button type="submit" name="login" class="btn btn-default">Log In</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>