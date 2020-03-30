<?php
  /**
   * [HomeModel class is used to handle the main functionality of fetchingh the blogs from the database]
   */
	class HomeModel{
		/**
		 * [home fucntion is to connect to the databse and fetch the blog details]
		 * @return [null]
  		 */
		function home() {
			/**
			* [$con is used to connect to the database]
			 * [$sql is used to handle the sql statement]
			 * [$result is used to handle the output from the database]
			 */
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM blogs order by created_at DESC";
			$result = $con -> query($sql);
			include('view/Home.php');
			/**
			 * [$object is the object of HoemView to use its funtions]
			 * @var HomeView
			 */
			$object = new HomeView;
			$object -> show($result);
			}
		}

?>
