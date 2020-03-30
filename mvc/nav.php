<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel = "stylesheet" type = "text/css" href = "/view/navcss.css">
  </head>
  <body>
	  <div class = "topnav">
		  <?php
			  echo "<a style = 'float:left' href = '/'>HOME</a>";
		    if(isset($_SESSION['user_id'])) {
			    echo "<a style = 'float:right' href = '/index.php/Login/logout'>LOGOUT</a>";
			    echo "<a style = 'float:left' href = '/index.php/User/userhome'>My Blogs</a>";
			    echo "<a style = 'float:left' href = '/index.php/Add/add'>ADD POST</a></p>";
			    echo "<h3 style = 'padding-right:20px;float:right;'>Hello " . $_SESSION['user_id'] . "!</h3>";
		    }
		    else {
			    echo "<a style = 'float:right' href = '/index.php/Login/login'>LOGIN</a>";
		    }
		  ?>
	  </div>
  </body>
</html>
