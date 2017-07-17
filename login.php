<!DOCTYPE html>
<html ln="eng">
<head>
<head>
		<title>TechForum</title>
		<?php include 'sections/head.php'; ?>

</head>
<body>
    
	<?php include 'sections/nav.php'; ?>
	<?php 
	if(isset($_SESSION['forum']))
{
$pid=$_SESSION['forum'];
	$id=$pid;
	$_SESSION['id'] = $pid;
}	
	?>
	<div class="container">
		<div class="mahbub">	
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8" id="col">
						<div class="rop">
							<h1 class="page_title">Log In</h1>
							<div class="seper"></div>
							<form method="post" action="loguser.php" class="form-inline" role="form">
								<div class="form-group">
									<h5><input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required/></h5><br>
									<h5><input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required/></h5><br>
									<button type="submit" name="btn-login" class="btn btn-info btn-lg" role="button">Log In</button>
								</div>
							</form>

						<h7>Don't have an account!!! <a href="register.php">Register</a> now!!</h7>
						</div>

					</div>
				<?php include 'sections/side.php'; ?>
				</div>
			</div>
		</div>
    </div>

	
		<?php include 'sections/footer.php'; ?>
		<?php include 'sections/scripts.php'; ?>
		
</body>
</html>