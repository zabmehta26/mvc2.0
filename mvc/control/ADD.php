<?php
  /**
   * [AddControl class handles the main flow of adding the blog functionality]
   */
	class AddControl{
		  /**
		   * [add function is called first most which calls the view after blog adding]
		   */
		  function add(){
				if (isset($_SESSION['user_id'])) {
			    include('view/ADD.php');
			  }
				else {
					include('view/ERROR.html');
				}
		  }
		  /**
		   * [add_feed function calls the model file for database connectivity and also to add the data in the database]
		   */
		  function add_feed() {
			  include('model/CONNECT.php');
			  /**
			   * [$object is an object of the class AddModel from model/Add.php file and is used to call the add function from models file]
			   * @var ConnectModel
			   */
			  $object = new ConnectModel;
			  $object -> add();
		  }
	}
?>
