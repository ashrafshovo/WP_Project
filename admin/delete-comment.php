<?php 
session_start();
include '../config/db_connect.php'; ?>

<?php 

	if(isset($_GET['delete_id1']))
	{
	
	$id=$_GET['delete_id1'];
	$sql = "delete from comments where id = '$id'";
	$result = $con->query($sql);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='viewcomment.php'";
	echo "</script>";
	header("Location: viewcomment.php");
	exit();
	

}


if(isset($_GET['delete_id2']))
	{

if(isset($_SESSION['forum']))
{
$forum_id=$_SESSION['forum'];
}
	
	$id=$_GET['delete_id2'];
	$sql = "delete from reply where id = '$id'";
	if($result = $con->query($sql)){
	$sql2="UPDATE forum SET num_comments=num_comments-1 WHERE id = $forum_id";
	$results = $con->query($sql2);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='viewcomment.php'";
	echo "</script>";
	header("Location: viewcomment.php");
	}
	exit();
	

}




	if(isset($_GET['delete_id3']))
	{
	
	$id=$_GET['delete_id3'];
	$sql3 = "delete from category where category_id = '$id'";
	$result3 = $con->query($sql3);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='category.php'";
	echo "</script>";
	header("Location: category.php");
	exit();
	

}








if(isset($_GET['delete_id4']))
	{
	
	$id=$_GET['delete_id4'];
	$sql = "delete from users where id = '$id'";
	$result = $con->query($sql);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='viewuser.php'";
	echo "</script>";
	header("Location: viewuser.php");
	exit();
	

}


	if(isset($_GET['delete_id5']))
	{
	
	$id=$_GET['delete_id5'];
	$sql = "delete from forum where id = '$id'";
	$result = $con->query($sql);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='forum-post.php'";
	echo "</script>";
	header("Location: forum-post.php");
	exit();
	

}


if(isset($_GET['delete_id6']))
	{
     $id = $_GET['delete_id6'];
	$sql = "delete from blog_post where id = '$id'";
	$result = $con->query($sql);
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Deleted Successfully...');\n";
	echo "window.location='viewpost.php'";
	echo "</script>";
	header("Location: viewpost.php");
	exit();

}





 ?>