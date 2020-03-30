<?php
  /**
   * [HomeControl class is used to add the functionality of model/home.php file ]
   */
	class HomeControl {
		/**
		 * [home function is used to create the object of HomeModel class]
		 * @return [null]
		 */
		function home() {
			include('model/CONNECT.php');
			/**
			 * [$obje is the object of HoemModel type to use its funcdtions]
			 * @var ConnectModel
			 */
			$obje = new ConnectModel;
			$obje -> home();
		}
	}

?>
