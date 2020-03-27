<?php
  /**
   * [BlogModel class includes the functions for fetching data]
   */
	class BlogModel{
		/**
		 * [blog function is to connect to the databse and fetch blog ionfo]
		 * @param  [int] $value [the user id goes in it]
		 * @return [null]
		 */
		function blog($value) {
			/**
			 * [$con connects with the database]
			 * [$sql handles the sql statement]
			 * [$reult handles the returned value from databse int he form of table]
			 * [$object is the object of BlogView class]
			  */
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con->query($sql);
			include ('view/Blog.php');
			$object = new BlogView;
			$object -> show($result);
			}
		}
?>
