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
				
				
				<table class="tborder" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
								<thead class="a">
									<tr align="center">
										  <td class="thead" width="45%" align="left">Topic</td>
										  <td class="thead" width="20%">Category</td>
										  <td class="thead">User</td>
										  <td class="thead">Views</td>
										  <td class="thead">Replies</td>
									</tr>
								</thead>
								<?php

								include_once 'config/db_connect.php';
									$start=0;
									$limit=20;
					                if(isset($_GET['id']))
										{
										$id=$_GET['id'];
								     	}										
                                    
									$sql="select * from category where category_id=$id";
									$result=$con->query($sql);
									$row=$result->fetch_assoc();
									$category=$row['category_name'];
									
									
									?>
									<ul class="breadcrumb" section="bc"><li>
							<a href="techforum.php">Home</a>
							</li>
							<li>
							<a href="login.php">User</a>
							</li>
							<li>
							<a href="login.php"><?php echo $category; ?></a>
							</li>
							</ul>
								
								<?php	
									$sql="select * from forum where category='$category' ORDER BY id DESC LIMIT $start, $limit ";
									$result=$con->query($sql);
									while($row=$result->fetch_assoc()){									
										$d=$row['date'];								
										$date=timeAgo($d);
										$value = $row['name'];
										$name=strtok($value, " ");
								?>
								<tbody id="coll" style="">
									<tr align="center" class="abc">
										<td class="main-link" colspan="0" align="left">
											<a class="title"><?php  echo '<a href="post.php?id='.$row['id'].'">'.$row['title'].'</a>';?></a>
											<p>Asked <?php echo $date; ?><p>
										</td>
										<td class="category">
										    <a><?php echo '<a href="AdminPanel/viewpost.php?id='.$row['id'].'">'.$row['category'].'</a>'; ?></a>
										</td>
										<td class="posters">
											<a ><?php echo $name; ?></a>
										</td>
										<td>
											<a><span class="number"><?php echo '<a href="AdminPanel/viewpost.php?id='.$row['id'].'">'.$row['num_comments'].'</a>'; ?></span></a>
										</td>
										<td class="num_views">
											<?php echo '<a href="AdminPanel/viewpost.php?id='.$row['id'].'">'.$row['visitor'].'</a>'; ?>
										</td>
									</tr>
								</tbody>

								<?php
								}								
								?>
							</table>
					
					
					
					
					
					
					
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