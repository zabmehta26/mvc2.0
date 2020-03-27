<?php
  /**
   * [DeleteControl class is used to include functionality of delete.php from model]
   */
	class DeleteControl {
		/**
		 * [delete function passes the blog id to know about theblog used to delete]
		 * @param  [int] $value [handles blog id]
		 * @return [null]
		 */
		function delete($value) {
			include('model/Delete.php');
			/**
			 * [$obje is the object of the Deletemodel class to use its fnx]
			 * @var DeleteModel
			 */
			$obje = new DeleteModel;
			$obje -> delete($value);
		}
	}

?>
