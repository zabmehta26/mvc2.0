<?php
  /**
   * [UserControl class handles the functionalioty for show the ulof=gged in user its own blogs page]
   */
	class UserControl{
		  /**
		   * [home function is used to create a object of thje UserHomeModel class to use its functionality]
		   * @return [null]
		   */
		  function userhome(){
				if (isset($_SESSION['user_id'])) {
			  /**
			   * [$usr variable is used to store the user id for the loggedin user]
			   * @var [int]
			   */
			  $usr = $_SESSION['user_id'];
			  include('model/CONNECT.php');
			  /**
			   * [$obje is made ax an object of UserHomeModel class to call its fnx]
			   * @var ConnectModel
			   */
			  $obje = new ConnectModel;
			  $obje -> userhome($usr);
		  }
			else {
				include('view/ERROR.html');
			}
		}
	}
?>
