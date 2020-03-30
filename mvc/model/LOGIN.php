<?php
  /**
   * [LoginModel class handles the logging of user by checking the values with the values in the database]
   */
	class LoginModel{
		/**
		 * [Login function handles connecting to the databse for fetchinmg the details]
		 */
		function login() {
			$user = $_POST['uname'];
			$pass = $_POST['psw'];
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
			$result = $con -> query($sql);
			$row = $result -> fetch_assoc();
			return $row;
			}
		}

?>
