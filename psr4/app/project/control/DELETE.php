<?php
namespace project\control;

  /**
   * [DeleteControl class is used to include functionality of delete.php from model]
   */
	class DELETE {
			/**
		 * [delete function passes the blog id to know about theblog used to delete]
		 * @param  [int] $value [handles blog id]
		 * @return [null]
		 */
		 function delete($value) {
			 if (isset($_SESSION['user_id'])) {
			   include('app/project/model/CONNECT.php');
			   /**
			    * [$obje is the object of the Deletemodel class to use its fnx]
			    * @var CONNECT
			    */
				  $class = "project\model\CONNECT";
 	 			  $obje = new $class;
			    $obje -> delete($value);
		    }
				else {
					include('view/ERROR.html');
				}
		  }
	}

?>
