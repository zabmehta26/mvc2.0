/**
 * the file is used to show the fetched detail from the database to the user on the ui
 */
<!DOCTYPE html>
<html>
  <head>
	  <link rel = 'stylesheet' type = 'text/css' href = '/mvc/view/show.css'>
	  <link href = 'view/jquery.js'>
  </head>
  <body>
  <?php
  /**
   * [HomeView class is used to contain the actual functionality used to show the fetched database]
   */
  class HomeView {
    /**
     * [show function is used to show the details of blogs on the ui to the user]
     * @param  [mysqli] $result [handles the output from the database]
     * @return [null]
     */
	  function show($result) {
		  echo '<div class = "row container mx-auto"><div class = "leftcolumn">';
		  while ($row = $result -> fetch_assoc()) {
			  $words = explode(" ", $row['content']);
			  echo "<div class = 'card'><div class = 'inside'><h2><a href = /mvc/index.php/blog/blog/" . $row['id'] . ">" . $row['title'] ."</a></h2><h5>";
			  for ($i = 0; $i < 5; $i++) {
				  echo  " " . $words[$i] ;
			  }

			  // ADD A CHECK IF THE WORDS ARE MORE THEN ALLOWED ON HOME CHARACTER, THEN REMOVE READ ORE OTHEERWISE SHOW READ MORE

			  echo "...<a href = /mvc/index.php/blog/blog/" . $row['id'] . ">Read more</a></h5>";
			  echo "<p style = 'font-size:12px'>created by : <u>" . $row['username'] . "</u> --- created at : " . $row['created_at'] . "</p></div>" ;
			  if ($_SESSION['user_id'] == $row['username']) {
				  echo "<a style = 'float:right;padding-right:10px;;' href = '/mvc/index.php/delete/delete/". $row['id'] ."'>DELETE POST</a></p>";
				  echo "<a style = 'float:right;padding-right:10px;' href = '/mvc/index.php/edit/edit/". $row['id'] ."'>EDIT POST</a></p> ";
			  }
			  echo "</div><br>";
		  }
	  }
  }
  ?>
  </body>
</html>
