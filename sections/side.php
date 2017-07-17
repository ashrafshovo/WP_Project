<div class="col-md-4">
	<?php
	
	
	$page=$_SERVER['PHP_SELF'];
	
    include_once 'config/db_connect.php';
	echo "<div id='side'>";
		echo "<div id='side_title'>";
			echo "What's news";
		echo "</div>";								
	$start=0;
	$limit=4;
	$sql="select * from blog_post ORDER BY postDate DESC LIMIT $start, $limit";
	$result=$con->query($sql);

	while($row=$result->fetch_assoc())
	{
		echo "<div id='blog_post'>";
		echo '<a href="viewpost.php?id='.$row['id'].'">'.$row['postTitle'].'</a>';
		echo "</div>";
	}
	
	echo "</div>";	
	
	
	echo "<br>";

	
	if($page=='/project/post.php'){

	       
	       echo "<div id='side'>";
		echo "<div id='side_title'>";
			echo "Related Topic";
		echo "</div>";
	$start=0;
	$limit=4;
	$lol=0; 
			$sql ="SELECT * FROM forum WHERE id=$id";
			$result=$con->query($sql);
			$row=$result->fetch_assoc();
			$category=$row['category'];
			
			$sql2="select * from forum where category='$category' && id!=$id";
			$result2=$con->query($sql2);
			while($row2=$result2->fetch_assoc())
			{
			 echo "<div id='blog_post'>";
		echo '<a href="post.php?id='.$row2['id'].'">'.$row2['title'].'</a>';
		echo '<p><b>'.$row['num_comments'].'</b> posts / by <a>'.$row2['name'].'</a><p>';
		echo "</div>"; 
			}
	
	echo "</div>";
	}

else{
	
	
	
	echo "<div id='side'>";
		echo "<div id='side_title'>";
			echo "HOT DISCUSSIONS";
		echo "</div>";
	$start=0;
	$limit=4;
	$lol=0;
$sql2="select * from forum where visitor>$lol LIMIT $start, $limit";
	$result2=$con->query($sql2);

	while($row2=$result2->fetch_assoc())
	{
		echo "<div id='blog_post'>";
		echo '<a href="post.php?id='.$row2['id'].'">'.$row2['title'].'</a>';
		echo '<p><b>'.$row2['num_comments'].'</b> posts / by <a>'.$row2['name'].'</a><p>';
		echo "</div>";
	}
	echo "</div>";
	
}	
	?>
</div>