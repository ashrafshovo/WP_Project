<?php

session_start();
include_once 'config/db_connect.php';


if(isset($_POST['btn-reg']))
{
  $name = mysql_real_escape_string($_POST['name']);
  $username = mysql_real_escape_string($_POST['username']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $repassword = mysql_real_escape_string($_POST['repassword']);
   
   
   if(empty($name) || empty($username) || empty($email) || empty($password) || empty($repassword)){
   
		echo "<script language=\"JavaScript\">\n";
		echo "alert('please fill out this fields');\n";
		echo "window.location='register.php'";
		echo "</script>";
   }
   else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
				echo "<script language=\"JavaScript\">\n";
				echo "alert('Invalid Email');\n";
				echo "window.location='register.php'";
				echo "</script>";	
		}
		else{
		if(!preg_match("/\\s/",$username) && preg_match( '~[A-Za-z]~',$username) && preg_match( '~[0-9]~', $username)) {

		   if((strlen( $password) > 5)){
			   if($password==$repassword){
			   
				$query = "SELECT email FROM users WHERE email='$email'";
				$result = $con->query($query);
				$count = $result->num_rows;
				$date = date("Y-m-d");
				$name=ucfirst($name);
					if($count == 0){
						if($query = $con->query("INSERT INTO users(name,username,email,password,repassword,date) VALUES ('$name','$username','$email','$password','$repassword','$date')")){   
				
							header("Location: techforum.php");
					}
					else
					{
				   
					echo "<script language=\"JavaScript\">\n";
					echo "alert('error while registering you...');\n";
					echo "window.location='register.php'";
					echo "</script>";
				   
				   }

				   }
				   else
				  

				   {
					   
					echo "<script language=\"JavaScript\">\n";
					echo "alert('Sorry Email ID already taken ...');\n";
					echo "window.location='register.php'";
					echo "</script>";
				   }
		  


				}

				else{

				echo "<script language=\"JavaScript\">\n";
				echo "alert('Error! password do not match');\n";
				echo "window.location='register.php'";
				echo "</script>";
		 
				}

			}
			else{
			   
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Password must contain at least six characters');\n";
			echo "window.location='register.php'";
			echo "</script>";

			}

		}

		else{


			
		   echo "<script language=\"JavaScript\">\n";
		   echo "alert('username must contain at least one letter & one number');\n";
		   echo "window.location='register.php'";
		   echo "</script>";

		}

}
    }
    
}


			$query = "SELECT * FROM users WHERE username='$username'";
			$result = $con->query($query);
			$row=$result->fetch_assoc();

			$_SESSION['user'] = $row['id'];






	?>
