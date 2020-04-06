<?php
namespace project\control;

  /**
   * [LoginControl handles all the functionality of loggin in and authenticity]
   */
	class LOGIN {
		/**
		 * [login function is used to define the object of loginModel class for logging in]
		 * @return [null]
		 */
		function login() {
			if(isset($_SESSION['user_id'])) {
				header("location: /index.php/USER/userhome");
			}
			include('app/project/view/LOGIN.php');
		}
		/**
		 * [login_check handles that the user loggin in is authentic or not]
		 * @return [null]
		 */
		function login_check() {
			include('app/project/model/CONNECT.php');
			$class = "project\model\CONNECT";
			$object = new $class;
			$return_value = $object -> login();
			if ($return_value['password'] == $_POST['psw']) {
				$_SESSION['user_id'] = $return_value['username'];
				header("location: /index.php/USER/userhome");
			}
			else {
				echo "ENTER CORRECT PASSWORD \ USERNAME";
				include('app/project/view/LOGIN.php');
			}
		}
		/**
		 * [logout handles the functionality for loggin out the user]
		 * @return [type] [description]
		 */
		function logout() {
				session_destroy();
				echo "logout succesfull";
				echo $_SESSION['user_id'];
				header("location: /");
	  }
	}
?>
