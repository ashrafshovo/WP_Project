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

								$visitor="select * from visitor";
								
								$result=$con->query($visitor);
								
								$count=$result->num_rows;
								
									if($count==0){
								
									$userip=$_SERVER['REMOTE_ADDR'];
								
									$sql=("INSERT INTO visitor(visitor_ip)values('$userip')");
									$con->query($sql);
									}
								include_once 'config/db_connect.php';
									$start=0;
									$limit=7;
									if(isset($_GET['id']))
										{
										$id=$_GET['id'];
										$start=($id-1)*$limit;
										}
										else{
										$id=1;
										}									
									$sql="select * from forum ORDER BY id DESC LIMIT $start, $limit";
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
										    <a><?php echo '<a href="catagory.php?id='.$row['category_id'].'">'.$row['category'].'</a>'; ?></a>
										</td>
										<td class="posters">
											<a><?php echo '<a href="user.php?id='.$row['user_id'].'">'.$name.'</a>';?></a>
										</td>
										<td>
											<a><span class="number"><?php echo '<a>'.$row['visitor'].'</a>'; ?></span></a>
										</td>
										<td class="num_views">
											<?php echo '<a>'.$row['num_comments'].'</a>'; ?>
										</td>
									</tr>
								</tbody>

								<?php
								}								
								?>
							</table>

								<?php

									$sql="select * from forum";
									$results=$con->query($sql);
									$rows=$results->num_rows;
									$total=ceil($rows/$limit);
								?>
									<nav aria-label="...">
									<ul class="pagination">
										<?php 
											if($id>1)
											{
										?>
												<li><?php echo "<a href='?id=".($id-1)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>" ;?></li>	
										<?php	
											}
											for($i=1;$i<=$total;$i++)
											{	
												if($i==$id) {
										?>
													<li class="active"><?php echo "<a>".$i."<span class='sr-only'>(current)</span></a>" ;?></li>
										<?php
												}
												else {
										?>
													<li><?php echo "<a href='?id=".$i."'>".$i."</a>" ;?></li>
										<?php
												}
											}
											if($id!=$total)
											{
										?>
												<li><?php echo "<a href='?id=".($id+1)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a>" ;?></li>	
										<?php

											}
										?>							
										</ul>
									</nav>												
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