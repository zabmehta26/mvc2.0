<?php
namespace project\control;

  /**
   * [UserControl class handles the functionalioty for show the ulof=gged in user its own blogs page]
   */
	class USER{
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
			  include('app/project/model/CONNECT.php');
			  /**
			   * [$obje is made ax an object of UserHomeModel class to call its fnx]
			   * @var CONNECT
			   */
			  $class = "project\model\CONNECT";
	 			$obje = new $class;
			  $obje -> userhome($usr);
		  }
			else {
				include('app/project/view/ERROR.html');
			}
		}
	}
?>
