<?php
  /**
   * [UserControl class handles the functionalioty for show the ulof=gged in user its own blogs page]
   */
	class UserControl{
		/**
		 * [home function is used to create a object of thje UserHomeModel class to use its functionality]
		 * @return [null]
		 */
		function home(){
			/**
			 * [$usr variable is used to store the user id for the loggedin user]
			 * @var [int]
			 */
			$usr = $_SESSION['user_id'];
			include('model/Userhome.php');
			/**
			 * [$obje is made ax an object of UserHomeModel class to call its fnx]
			 * @var UserHomeModel
			 */
			$obje = new UserHomeModel;
			$obje -> home($usr);
		}
	}
?>
