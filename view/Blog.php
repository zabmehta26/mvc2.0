/**
 * the file is used to show the fetched value to the user on the ui in a defined form
 */

<!DOCTYPE html>
<html>
  <head>
	  <link rel = 'stylesheet' type = 'text/css' href = '/mvc/view/show.css'>
	  <link rel = 'stylesheet' type = 'text/css' href = '/mvc/view/main.css'>
	  <link rel = 'stylesheet' type = 'text/css' href = '/mvc/view/font-awesome.min.css'>
	  <link href = 'view/jquery.js'>
  </head>
  <body>
  <?php
  /**
   * [BlogView class does the handles functionality of showing]
   */
  class BlogView {
    /**
     * [show function is used to show the fetchwed detail on the screen to the user]
     * @param  [mysqli] $value [ it handles the returned output from the database]
     * @return [null]
     */
	  function show($value) {
		  echo '<div class = "row container mx-auto"><div class = "leftcolumn">';
		  while ($row = $value -> fetch_assoc()) {
			  echo "<div class = 'card'><div class = 'inside'><h1>" . $row['title'] ."</a>
			  </h1><div class = 'image fit flush'><img src = '/mvc/" . $row['image'] . "'></div><br><br><h5>"
			  . $row['content'] . "</h5><br><p style = 'background-color:yellow;width: 39%;
			  padding: 2px;'>created by : <u>" . $row['username'] . "</u> --- created
			  at : " . $row['created_at'] . "</p></div>" ;
			  if (isset($_SESSION['user_id'])) {
				  echo "<a style = 'float:right;padding-right:10px;;' href = /mvc/index.php/delete/delete/". $row['id'] ."''>DELETE POST</a>";
				  echo "<a style = 'float:right;padding-right:10px;' href = '/mvc/index.php/edit/edit/". $row['id'] ."'>EDIT POST</a>";
			  }
			  echo "</div><br>";
		  }
	  }
  }
  ?>
  </body>
</html>
