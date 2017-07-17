<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"a-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a><img class="navbar-brand" src="img/logo.png" ></a>
        <a href="#" onclick="javascript.void()" class="submenu">Menus</a>
      </div>

      <div class="menuBar">
        <ul class="menu">
          <li><a href="techforum.php">Home</a></li>
          <li><a href="about.php">About</a></li>
		  
		  <li class="dropdown1">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Categories</a>
		   <ul class="dropdown-menu">
				<?php
					include_once 'config/db_connect.php';
					$sql2="select * from category";
					$result2=$con->query($sql2);
					while($row2=$result2->fetch_assoc()){					
				?>
					<li><?php echo '<a href="catagory.php?id='.$row2['category_id'].'">'.$row2['category_name'].'</a>'; } ?></li>
		   </ul>
		  
		  
		  </li>
		  
		  <?php 

			session_start();
			include_once 'timeago.php';
			include_once 'config/db_connect.php';

				if(isset($_SESSION['user']))
				{
					$id=$_SESSION['user'];
					$sql="SELECT * FROM users WHERE id=$id";
					$res=$con->query($sql);
					$userRow=$res->fetch_assoc();
					echo '<li><a href="user.php?id='.$userRow['id'].'">Profile</a></li>';
					echo '<li><a href="ask.php">Ask</a></li>';
					echo '<li><a href="logout.php">Logout</a></li>';
				}

				else{
					echo '<li><a href="login.php">Login</a></li>';
					echo'<li><a href="register.php">Register</a></li>';
				}

		?>       
        </ul>
      </div>
    </nav>
  </div>
</header>