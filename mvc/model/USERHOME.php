<?php
/**
 * [UserHomeModel class handles the main functionality of fetching the detail for the logged in user]
 */
	class UserHomeModel{
		/**
		 * [home function is used to connect to the databse and fetch output]
		 * @param  [int] $user [handles the logged in user id]
		 * @return [null]
		 */
		function home($user) {
			/**
			* [$con is used to connect to the database]
			* [$sql is used to handle the sql statement]
			 * [$result is used to handle the output from the database]
			 */
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM blogs WHERE username = '$user' order by created_at DESC";
			$result = $con -> query($sql);
			include('view/Home.php');
			/**
			 * [$object is the object of the HoemView class to use its fnx]
			 * @var HomeView
			 */
			$object = new HomeView;
			$object -> show($result);
			}
		}
?>
