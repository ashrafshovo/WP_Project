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
	
	
	

<div class="st">
	

<?php




include_once '../db_connect.php';
        
            
$id=$_GET['id'];


$_SESSION['id']=$id;

$sql ="SELECT * FROM blog_post WHERE id=$id";


$result=$con->query($sql);


$row=$result->fetch_assoc();

  
  
  
       


       echo "<div id='sst'>";

echo '<h2>'.$row['postTitle'].'</h2>';



echo ''.$row['postDate'].' BY '.$row['name'].'';




echo "<div id='im'>";




echo '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http:" target="_blank">
 <img src="img/fb.jpg" alt="Facebook" />
</a> ';

echo '<a target="_blank" href="https://twitter.com/home?status='.$row['postTitle'].'" target="_blank">
 <img src="img/tw.png" alt="Twitter" />
 </a> ';
 
 echo '<a target="_blank" href="http://www.facebook.com/sharer.php?u=https://" target="_blank">
 <img src="img/g+.jpg" alt="Google +" />
</a> ';

echo "</div>";





        echo "<div id='image'>";
        $imgpath=$row['image'];
         echo "<img src='$imgpath' height='350px' width='85%'>";
             echo "</div><br />";
             



echo "<div id='pt'>";
echo nl2br($row['postCont']).'<br/>';
    echo "</div><br />";





echo "</div>";











    
       












?>


                



 </div>
	
	

	

	
	
	
	
	
	
	
	
	
	
	
	
	
		<?php include 'sections/side.php'; ?>
		</div>
		</div>
		</div>
		
				</div>
		
		</div>
			
		
		
		<?php include 'sections/footer.php'; ?>
		<?php include 'sections/scripts.php'; ?>
		
</body>
</html>