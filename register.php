<!DOCTYPE html>
<html ln="eng">
<head>
<head>
		<title>TechForum</title>
		<?php include 'sections/head.php'; ?>


</head>
<body>

	<?php include 'sections/nav.php'; ?>
	<div class="container">
		<div class="mahbub">	
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8" id="col">
						<div class="rop">
							<h1 class="page_title">Register</h1>
							<div class="seper"></div>
								<form method="post" action="reguser.php" class="form-inline" role="form">
									<div class="form-group">
										<h5><input type="text" class="form-control" name="name"  placeholder=" Full Name" required/></h5>
										<h5><input type="text" class="form-control" title="username must contain at least one letter & one number" name="username" placeholder="Username" required/></h5>
										<h5><input type="email" class="form-control" name="email" placeholder="Email" required/></h5>
										<h5><input type="password" title="Password must contain at least six characters" class="form-control" name="password" placeholder="Password" required/></h5>
										<h5><input type="password" title="Password must contain at least six characters" class="form-control" name="repassword" placeholder="Re Enter Password" required/></h5><br>  
										<button type="submit" class="btn btn-info btn-lg" name="btn-reg"  role="button">Register</button>
									</div>
								</form>
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