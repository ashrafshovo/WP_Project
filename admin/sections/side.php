<div class="col-md-4">
	<?php
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
	?>
</div>