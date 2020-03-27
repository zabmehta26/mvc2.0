<?php
  /**
   * [AddControl class handles the main flow of adding the blog functionality]
   */
	class AddControl{
		/**
		 * [add function is called first most which calls the view after blog adding]
		 */
		function add(){
			include('view/Add.php');
		}
		/**
		 * [add_feed function calls the model file for database connectivity and also to add the data in the database]
		 */
		function add_feed() {
			include('model/Add.php');
			/**
			 * [$object is an object of the class AddModel from model/Add.php file and is used to call the add function from models file]
			 * @var AddModel
			 */
			$object = new AddModel;
			$object -> add();
		}
	}
?>
