<!DOCTYPE html>
<html>
<head>
	<title>TechForum Admin Panel</title>

	<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script>	
		function delete_id3(id)
{
     if(confirm('Are you sure you want to remove this user?'))
     {
        window.location.href='delete-comment.php?delete_id3='+id;
     }
}


</script>
	
	
	
	
	
</head>
<body>
<center><h1 style="color:#337AB7">TechForum Admin Panel</h1></center>
<div class="container">
<a href="../TechForum.php" class="navbar-brand">TechForum</a>
	<ul class="nav nav-pills">
		<li role="presentation"><a href="home.php">Home</a></li>
  		<li role="presentation"><a href="admin.php">Admin</a></li>
		 <li role="presentation"><a href="forum-post.php">Forum Post</a></li>
		 <li role="presentation"><a href="viewcomment.php">View Comment</a></li>
		 <li role="presentation" class="active"><a>View Category</a></li>
  		<li role="presentation"><a href="blog_post.php">Add Post</a></li>
  		<li role="presentation"><a href="viewpost.php">View Post</a></li>
  		<li role="presentation"><a href="viewuser.php">View User</a></li>
  		<li role="presentation"><a href="logout.php">Log Out</a></li>
	</ul>
	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Admin Panel</h3>
		  </div>
		<div class="panel-body">

		 
		 <div class ="tab">
						<ul id="tabnav" class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">View category</a></li>
							<li><a data-toggle="tab" href="#menu1">Add Category</a></li>
						
						</ul>
		
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">

							<?php

							include 'config/db_connect.php';

							$sql = "select * from category";
							$result = $con->query($sql);
							$posts = array();

							while ($row = $result->fetch_assoc()) {
							$categorys[] = array(
							'id' => $row['category_id'],
							'name' => $row['category_name']
							);
							}

							?>
						<table class="table table-bordered">
			  	<thead>
			  		<th>Category ID</th>
			  		<th>Category Name</th>
					<th>Action</th>
					<th>Action</th>
			  	</thead>
							
							
							
							<?php foreach ($categorys as $category): ?>
			  		<tr>
			  			<td><?php echo $category['id']; ?></td>
				  		<td><?php echo $category['name']; ?></td>
				  		<td>
				  			<a href="javascript:delete_id3(<?php echo $category['id']; ?>)">Delete</a>
				  		</td>
						<td>
				  			<a href="edit-category.php?id=<?php echo $category['id']; ?>">Edit</a>
				  		</td>
			  		</tr>
			  	<?php endforeach; ?>
			  	</tbody>
			</table>
							
							
							
							 
							</div>	
                              
<div id="menu1" class="tab-pane fade">
							
							
							
							
		<form name="category_form" >
         
		<h1>Add Category:</h1>
		<input type="text" id="category" value=""  /><br><br>
		<div id="status_text" />
         <button type="submit" id="submit" class="btn btn-info btn-lg" role="button">Submit</button>
        </form>		
							
							
							
							
							
	</div>						
							
							
						
						</div>
						
		</div>				
						
						
		 
		 
		 
		
		
		</div>
	</div>
</div>





<script>

$("#submit").click(function(){
 
 //get the form values
 var category = $('#category').val();     
 
 //make the postdata
 var postData = '&category='+category;

 $.ajax({
    url : "add_category.php",
    type: "POST",
    data : postData,
    success: function(data,status, xhr)
    {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
        $("#status_text").html(data);
        $('#category').val('');
    },
    error: function (jqXHR, status, errorThrown)
    {
        //if fail show error and server status
        $("#status_text").html('there was an error ' + errorThrown + ' with status ' + textStatus);
    }
});
 
 });
 
 
 
 
</script>









</body>
</html>



