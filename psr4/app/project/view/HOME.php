<!DOCTYPE html>
<!--the file is used to show the fetched detail from the database to the user on the ui
-->
<html>
  <head>
	  <link rel = 'stylesheet' type = 'text/css' href = 'app/project/view/show.css'>
	  <link href = 'app/project/view/jquery.js'>
  </head>
  <body>
    <div class = "row container mx-auto"><div class = "leftcolumn">;
    <?php
		  while ($row = $result -> fetch_assoc()) {
			  $words = explode(" ", $row['content']);
			  echo "<div class = 'card'><div class = 'inside'><h2><a href = /index.php/BLOG/blog/" . $row['id'] . ">" . $row['title'] ."</a></h2><h5>";
			  for ($i = 0; $i < 4; $i++) {
				  echo  " " . $words[$i] ;
			  }
			  // ADD A CHECK IF THE WORDS ARE MORE THEN ALLOWED ON HOME CHARACTER, THEN REMOVE READ ORE OTHEERWISE SHOW READ MORE
			  echo "...<a href = /index.php/BLOG/blog/" . $row['id'] . ">Read more</a></h5>";
			  echo "<p style = 'font-size:12px'>created by : <u>" . $row['username'] . "</u> --- created at : " . $row['created_at'] . "</p></div>" ;
			  if (($_SESSION['user_id'] == $row['username']) && (isset($_SESSION['user_id']))) {
				  echo "<a style = 'float:right;padding-right:10px;;' href = '/index.php/DELETE/delete/". $row['id'] ."'>DELETE POST</a></p>";
				  echo "<a style = 'float:right;padding-right:10px;' href = '/index.php/EDIT/edit/". $row['id'] ."'>EDIT POST</a></p> ";
			  }
			  echo "</div><br>";
		  }
    ?>
  </body>
</html>
