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
                         
								<?php 
									
									$id=$_GET['id'];
									$sql ="SELECT * FROM users WHERE id=$id";
									$result=$con->query($sql);
									$row=$result->fetch_assoc();
									$date=$row['date'];
								?>
									<ul class="breadcrumb" section="bc">
										<li>
											<a href="techforum.php">Home</a>
										</li>
										<li>
											<a href="login.php">User</a>
										</li>
										<li>
											<a href="login.php"><?php echo $row['name']; ?></a>
										</li>
									</ul>	
								<?php
									echo "<div id='us'>";
									echo '<h1>'.$row['name'].'</h1>';
									echo "</div>";
									echo '<h1 class="user1">Join date : <span> '.$row['date'].' </span></h1>';						
								?>
									<div class ="tab">
										<ul id="tabnav" class="nav nav-tabs">									 
											<li class="active"><a data-toggle="tab" href="#home">About Me</a></li>
											<li><a data-toggle="tab" href="#menu1">Statistic</a></li>
											<li><a data-toggle="tab" href="#menu2">Contact Info</a></li>
										</ul>
									<div class="tab-content">
									<div id="home" class="tab-pane fade in active">
										
									<?php 
										if(isset($_SESSION['user']))
										{
											$iid=$_GET['id'];
											$id=$_SESSION['user'];
											$sql="SELECT * FROM users WHERE id=$id";
											$res=$con->query($sql);
											$userRow=$res->fetch_assoc();
									?>	
									
									<?php  
											if(isset($_POST['edit'])){
												$location=$_POST['location'];
												$sql = "UPDATE users SET location='$location' WHERE id=$id";
												$result=$con->query($sql);								
													if($result === TRUE){
													header("Location:user.php?id=".$id);
													}	
											}
											
												if(isset($_POST['edit2'])){
													$occupation=$_POST['occupation'];
													$sql2 = "UPDATE users SET occupation='$occupation' WHERE id=$id";
													$result2=$con->query($sql2);
														if($result2=== TRUE){
														header("Location:user.php?id=".$id);
														}	
												}

												if(isset($_POST['edit3'])){
													$interest=$_POST['interest'];
													$sql3 = "UPDATE users SET interest='$interest' WHERE id=$id";
													$result3=$con->query($sql3);
														if($result3=== TRUE){
														header("Location:user.php?id=".$id);
														}	
												}
										?>
											<h1 id="user2">Location <a id="displayText" href="javascript:toggle();"><span><?php if($userRow['id']==$iid){ echo "Edit"; }?></span></a></h1>
											<div id="toggleText" style="display: none">								
												<form method="post" class="user3">								
													<input type="text" name="location" /></br></br>
													<button type="submit" name="edit">Save</button>								
												</form>								
											</div>
											<div id="body" class="user4">
												<span><?php echo $row['location']; ?></span>
											</div>
											
											<h1 id="user2">Occupation <a id="displayText2" href="javascript:toggle2();"><span><?php if($userRow['id']==$iid){ echo "Edit"; }?></span></a></a></h1>
												<div id="toggleText2" style="display: none">
													<form method="post" class="user3">
														<input type="text" name="occupation" /></br></br>
														<button type="submit" name="edit2">Save</button>
													</form>
												</div>
											
											<div id="body2" class="user4">
												<span><?php echo $row['occupation']; ?><span>
											</div>
											
											<h1 id="user2">Interest <a id="displayText3" href="javascript:toggle3();"><span><?php if($userRow['id']==$iid){ echo "Edit"; }?></span></a></a></h1>
											<div id="toggleText3" style="display:none">
												<form method="post" class="user3">				
													<input type="text" name="interest" /></br></br>
													<button type="submit" name="edit3">Save</button>								
												</form>								
											</div>
											<div id="body3" class="user4">
												<span><?php echo $row['interest']; ?><span>
											 </div>
										<?php  
										} 
										else { ?>
											<h1 id="user2">Location</h1>
											<span class="user4"><?php echo $row['location']; ?></span>
											<h1 id="user2">Occupation</h1>
											<span class="user4"><?php echo $row['occupation']; ?></span>								
											<h1 id="user2">Interest</h1>	
											<span class="user4"><?php echo $row['interest']; ?></span>
										<?php
										}
										?>							
									</div>
									
									<div id="menu1" class="tab-pane fade">	
									<?php                            
										$sql="select * from forum where user_id=$iid";
										$resu=$con->query($sql);
										$count = $resu->num_rows;						
										$currentdate=date("Y-m-d");
										$joindate = strtotime($date);
										$todaydate = strtotime($currentdate);							
										$days_between =$todaydate - $joindate;							
										$diff=$days_between/86400;							
										$avgpost=$count/$diff;						
									?>							
										<h1 id="user2">Total posts: <?php echo $count; ?></h1>
										<h1 id="user2">Posts per day: <?php echo number_format((float)$avgpost, 7, '.', ''); ?> </h1>							
										<a class="up" id="user2"><span>Find all posts by <?php echo $row['name']; ?></span></a>							
										<div class="posts" style="display: none">										
											<table class="tborder" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
												<?php 
													while($roww=$resu->fetch_assoc()){
													$d=$roww['date'];								
													$date=timeAgo($d);
												?>
													<tbody id="coll" style="">
														<tr align="center" class="abc">
															<td class="main-link" colspan="0" align="left">
																<a class="title"><?php  echo '<a href="post.php?id='.$roww['id'].'">'.$roww['title'].'</a>';?></a>
																<p>Asked <?php echo $date;?><p>
															</td>
														</tr>
													</tbody>
												<?php
												}								
												?>
											</table>
										</div>				
									</div>
									<div id="menu2" class="tab-pane fade">
										<h3>Contact Me</h3>
										<p>id@techforum.com.</p>
									</div>							
								</div>
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