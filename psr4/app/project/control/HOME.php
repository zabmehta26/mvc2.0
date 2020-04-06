<?php
namespace project\control;

  /**
   * [HomeControl class is used to add the functionality of model/home.php file ]
   */
	class HOME {
		/**
		 * [home function is used to create the object of HomeModel class]
		 * @return [null]
		 */
		function home() {
			include('app/project/model/CONNECT.php');
			/**
			 * [$obje is the object of HoemModel type to use its funcdtions]
			 * @var CONNECT
			 */
			$class = "project\model\CONNECT";
			$obje = new $class;
			$obje -> home();
		}
	}

?>
