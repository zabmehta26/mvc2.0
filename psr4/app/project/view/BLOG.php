<!--
/**
 * the file is used to show the fetched value to the user on the ui in a defined form
 */
-->
<!DOCTYPE html>
<html>
  <head>
	  <link rel = 'stylesheet' type = 'text/css' href = 'app/projectapp/project/view/show.css'>
	  <link rel = 'stylesheet' type = 'text/css' href = 'app/project/view/main.css'>
	  <link rel = 'stylesheet' type = 'text/css' href = 'app/project/view/font-awesome.min.css'>
	  <link href = 'app/project/view/jquery.js'>
  </head>
  <body>
    <div class = "row container mx-auto">
      <div class = "leftcolumn">;
        <div class = 'card'>
          <div class = 'inside'>
            <h1><?php echo $row['title'];?></h1>
            <div class = 'image fit flush'>
              <img src = 'app/project/'<?php echo $row['image'];?>>
            </div><br><br>
            <h5><?php echo $row['content'];?></h5><br>
            <p>created by : <u><?php echo $row['username'];?></u> --- created at :<?php echo $row['created_at']?></p>
          </div> ;
  <?php
			if (isset($_SESSION['user_id'])) {
			  echo "<a style = 'float:right;padding-right:10px;;' href = /index.php/DELETE/delete/". $row['id'] ."''>DELETE POST</a>";
			  echo "<a style = 'float:right;padding-right:10px;' href = '/index.php/EDIT/edit/". $row['id'] ."'>EDIT POST</a>";
			}
			echo "</div><br>";
  ?>
  </body>
</html>
