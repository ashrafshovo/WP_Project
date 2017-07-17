
<div class="blogcomment">
<h1>Comments:</h1>
<?php

function getComments($row) {

global $con;

echo "<li class='comments'>";
echo "<div id='childcomment'>";
echo '<h1>'.$row['name'].'</h1>';
echo '<h2>'.$row['date'].'</h2>';
echo '<h3>'.$row['comment'].'</h3>';
echo "<a href='#comment' class='reply' id='".$row['id']."'>Reply</a>";
echo "</div>";

$par ="SELECT * FROM comments where parent_id = '".$row['id']."'";
$res=$con->query($par);
$count = $res->num_rows;

if($count>0){
	echo "<ul>";
	
	while($row=$res->fetch_assoc()){
			getComments($row);
	}
	
	
	echo "</ul>";
}
echo "</li>";
}



?>
		
</div>








