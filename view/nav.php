<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="/mvc/view/navcss.css">
</head>
<body>
	<div class="topnav">
		<?php
			echo "<a style='float:left' href='/mvc/'>HOME</a>";
		if(isset($_SESSION['user_id'])) {
			echo "<a style='float:right' href='/mvc/index.php/login/logout'>LOGOUT</a>";
			echo "<a style='float:left' href='/mvc/index.php/user/home'>My Blogs</a>";
			echo "<a style='float:left' href = '/mvc/index.php/add/add'>ADD POST</a></p>";
			echo "<h3 style='color:white;padding-right:20px;float:right;font-size: 17px;'>Hello " . $_SESSION['user_id'] . "!</h3>";
		}
		else {
			echo "<a style='float:right' href='/mvc/index.php/login/login'>LOGIN</a>";
		}
		?>
	</div>
</body>
</html>
