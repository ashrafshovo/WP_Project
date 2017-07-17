<!DOCTYPE html>
<html ln="eng">
<head>
<head>
		<title>TechForum</title>
		<?php include 'sections/head.php'; ?>
		<script type='text/javascript'>
$(function(){
	$("a.reply").click(function() {
		var id = $(this).attr("id");
		$("#parent_id").attr("value", id);
		$("#name").focus();
	});
});
</script>
		


</head>
<body>
    <?php include 'timeago.php'; ?>
	<?php include 'sections/nav.php'; ?>
	<div class="container">
		<div class="mahbub">	
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
					    <?php
                          
							include_once 'config/db_connect.php';

							$id=$_GET['id'];

							$_SESSION['id']=$id;							

							$sql ="SELECT * FROM blog_post WHERE id=$id";
							$result=$con->query($sql);
							$row=$result->fetch_assoc();
                                
								
								$d=$row['postDate'];								
								$date=timeAgo($d);;
								
								echo "<div id='sst'>";
								echo '<h2>'.$row['postTitle'].'</h2>';
								echo ''.$date.' BY '.$row['name'].'';
								


									echo "<div id='image'>";
									$imgpath=$row['image'];
									echo "<img src='admin/$imgpath' height='350px' width='85%'>";
									echo "</div><br />";
                                    
									echo "<div id='pt'>";
									echo nl2br($row['postCont']).'<br/>';
									echo "</div><br />";
									
								echo "</div>";
								echo '<hr/>';
								
								include 'commentblog.php';
								
								$id=$_GET['id'];
								$sql="select * from comments where post_id=$id and parent_id = 0";
								$result=$con->query($sql);
								while($row=$result->fetch_assoc()):
                                getComments($row);								
                                endwhile;
								
					?>
                     
					 
<div id="blogreply">
<div id="reply">
<h4>Leave a Reply</h4>

<p>Your email address will not be published. Required fields are marked *</p>
</div>
<form id="comment" name="" method="post" action="comments.php">
	<table>
		<tr>
			<td><label for="name">Name:*</label></td>
			<td><input name="comment_name" id="comment_name" placeholder="" required/></td>
		</tr>
		<tr>
			<td><label for="email">Email:*</label></td>
			<td><input name="comment_email" id="comment_email" placeholder="" required/></td>
		</tr>
		<tr>
			<td><label for="website">Website:</label></td>
			<td><input name="comment_web" id="comment_web"/></td>
		</tr>
		<tr>
			<td><label for="content">Comments:</label></td>
			<td><textarea name="comment_text" rows="5" cols="40" iid="comment_text" placeholder="" required></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td class="submit"><button type="submit" name="btn-comment" class="btncomment" role="button">POST COMMENT</button></td>
		</tr>
		
		<input type='hidden' name='parent_id' id='parent_id' value='0'/>

	</table>
</form>
</div>



			</div>
					
				<?php include 'sections/side.php'; ?>
				</div>
			</div>
		</div>
    </div>
		
	
			
		
		
		<?php include 'sections/footer.php'; ?>
		<?php include 'sections/mahbub.php'; ?>
		
</body>
</html>