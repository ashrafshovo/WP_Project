<!DOCTYPE html>
<html ln="eng">
<head>
<head>
		<title>TechForum</title>
		<?php include 'sections/head.php';?>
</head>
<body>

        <?php 
		session_start();
		include_once '../config/db_connect.php';
		if(isset($_SESSION['user'])){
		
		$id=$_SESSION['user'];
		
		?>

		<?php include 'sections/nav.php';  ?>
        

		
		
		<div class="container">
			<div class="mahbub">			
				<div class="col-xs-12">
					<div class="row">
				    
					<div class="col-xs-2">
                            <div class="stat-box1">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box2">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box3">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box4">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box5">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
					 <div class="col-xs-2">
                            <div class="stat-box6">
                                <i class="author">&nbsp;</i>
                                <h4>Users</h4>
                                <h1>56</h1>
                            </div>
                     </div>
						

					 
					</div>
					
					
					</div>
				</div>
			</div>
		
<?php } 
else{

?>
<div class="rop">
							<h1 class="page_title">Log In</h1>
							<div class="seper"></div>
							<form method="post" action="admin.php" class="form-inline" role="form">
								<div class="form-group">
									<h5><input type="text" class="form-control form-control-lg" name="email" placeholder="Username" required/></h5><br>
									<h5><input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required/></h5><br>
									<button type="submit" name="btn-login" class="btn btn-info btn-lg" role="button">Log In</button>
								</div>
							</form>

						<h7>Don't have an account!!! <a href="register.php">Register</a> now!!</h7>
						</div>
<?php
}

?>		
		
</body>		
</html>		