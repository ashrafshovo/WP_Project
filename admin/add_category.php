<?php

include 'config/db_connect.php';


$sql="INSERT INTO category(category_name)values('$_POST[category]')";

if($result=$con->query($sql)){

echo ("DATA SAVED SUCCESSFULLY");

}
else{

  echo '<div class="error">Error in adding category</div>';

}


?>