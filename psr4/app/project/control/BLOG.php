<?php
namespace project\control;

  /**
   * [BlogControl class is the main class which handles the flow for showing the blog for the logged in user]
   */
	class BLOG {
		/**
		 * [blog function is used to include the model file which fetches the info]
		 * @param  [int] $id [the variable is the id nuimber for the lodded in user]
		 * @return [null]
		 */
		function blog($id) {
			include('app/project/model/CONNECT.php');
			$class = "project\model\CONNECT";
			$object = new $class;
			$object -> blog($id);
		}
	}
?>
