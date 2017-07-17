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
						<div class="col-md-8" id="ask">
                         
						 
						 
						 
						       <h1 class="page_title">Ask Question</h1>
      <div class="seper"></div>
	  
	  <form method="post" action="question.php" class="form-inline" role="form">
          <div class="form-group">
            
	      
		  <td><h6>Title:</h6></td>
           <h5><input type="text" class="title" name="title" </h5>


		   
		   
    <td><h6>Catagory:</h6>
	  
	 <h6>
        <select id="source" name="source">
        <option value="0" selected="selected" disabled="disabled">Select catagory</option>		
		<?php		
	    $sql="select * from category";
		$result=$con->query($sql);
		while($row=$result->fetch_assoc()){
	    
		 
	    ?>
        <option value="<?php echo $row['category_name'] ;?>"><?php echo $row['category_name'] ;?></option>
        <?php } ?>
		</select>
	
	</h6>
   </td>
   
   <br><br>  
   
		  	<td><h6>Description:</h6></td>
          <h5><textarea name='description' cols='80' rows='10' ></textarea></h5>

         
          <br>  

          <button type="submit" class="btn btn-info btn-lg" name="submit"  role="button">Submit</button>
          </div>
          
        </form>
 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						
						
							
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