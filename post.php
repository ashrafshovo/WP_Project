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
						<div class="col-md-8">
							
							    <?php 
																		
									$id=$_GET['id'];
									$sql ="SELECT * FROM forum WHERE id=$id";
									$result=$con->query($sql);
									$row=$result->fetch_assoc();
									$_SESSION['forum'] = $row['id'];
									?>
										<ul class="breadcrumb" section="bc"><li>
										<a href="techforum.php">Home</a>
										</li>
										<li>
										<a><?php echo $row['category']; ?></a>
										</li>
										</ul>			
									<?php
									
									
									$userip=$_SERVER['REMOTE_ADDR'];
									$is=$_GET['id'];
									
									$sql = "SELECT * FROM postvisitor WHERE visitor_ip='$userip' and post_id=$is";
									$result = $con->query($sql);
									$count = $result->num_rows;
									
									if($count == 0){
									if($con->query("INSERT INTO postvisitor(post_id,visitor_ip) VALUES($is,'$userip')"))
									{
									$con->query("UPDATE forum SET visitor=visitor+1 WHERE id=$is");
									}
									}
                                    echo "<div id='st'>";									
									echo "<div id='sst'>";
									echo '<h2>'.$row['title'].'</h2>';
									echo "</div>";
									echo "<div id='sstt'>";
									echo ''.date('j-M-Y', strtotime($row['date'])).' by <a href="user.php?id='.$row['user_id'].'">'.$row['name'].'</a>';
									echo "</div>";
									echo "<div id='ssttt'>";
									echo '<p>'.$row['description'].'</p>';
									echo "</div>";
									echo '<a href="#comments" class="linkbtn answer">Answer This</a>';
								    echo "<hr>";
                                    echo '<h3>All discussion<span><b>'.$row['num_comments'].'</b> discussion</span></h3>';
									echo "<hr>";
									echo "</div>";
									
									
									
									$sql="select * from reply where forum_post_id=$id";
									$results=$con->query($sql);
									echo '<li id="comments">';
									while($frow=$results->fetch_assoc()){
									
									echo "<div id='forum-comment'>";									
									echo "<div id='ssttt'>";
									echo '<p>'.$frow['description'].'</p>';
									echo "</div>";
									echo "<div id='sstt'>";
									echo ''.$frow['date'].' by <a href="user.php?id='.$frow['user_id'].'">'.$frow['name'].'</a>';
									echo "</div>";
									echo "</div>";
									echo "<hr>";
									echo '</li>';
									
									}
									if(isset($_SESSION['user'])){																		
									$uid=$_SESSION['user'];
									$sql="SELECT * FROM users WHERE id=$uid";
									$res=$con->query($sql);
									$userRow=$res->fetch_assoc();									
									?>
												
									<form class="comment" action="forum_reply.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<textarea name="description" class="form-control" rows="3"></textarea>
										</div>
										<button type="submit" class="btn btn-info btn-lg" name="submit">Reply</button>
									</form>		

									<?php 
									} 
									else{
									echo "<div id='pp'>";
									echo '<h7>You are not logged in.Quickly <a href="login.php">sign in</a> to TechForum</h7>';
									echo "</div>";
									}
									?>



							
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