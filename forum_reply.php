<?php
session_start();

include_once 'config/db_connect.php';
if(isset($_SESSION['user']))
{
$id=$_SESSION['user'];
$sql="SELECT * FROM users WHERE id=$id";
$res=$con->query($sql);
$userRow=$res->fetch_assoc();
$uname=$userRow['name'];
}

if(isset($_SESSION['forum']))
{
$post_id=$_SESSION['forum'];
}


if(isset($_POST['submit']))
{

    $forum_post_id=$post_id;
	$name =$uname;
	$description = $con->real_escape_string($_POST['description']);
	
	if(empty($description)){
		
		echo "<script language=\"JavaScript\">\n";
		echo "alert('please fill out this field');\n";
		echo "window.location='post.php?id=$forum_post_id'";
		echo "</script>";
	}		   
	else{
		
	$user_id=$_SESSION['user'];
	$file=$_FILES['image'];
	$image="image/" .$file["name"];
	move_uploaded_file($file["tmp_name"], $image);
 		
    $date = date("Y-m-d");

		if($con->query("INSERT INTO reply(user_id, forum_post_id, name, description, image, date) VALUES('$user_id','$forum_post_id','$name','$description','$image','$date')"))
		{
		     $con->query("UPDATE forum SET num_comments=num_comments+1 WHERE id=$forum_post_id");
			header("Location:post.php?id=$forum_post_id");
		}
		else
		{
			?>
			<script>alert('error...');</script>
			<?php
		}		
	}
	}
	




?>

