<?php
  /**
   * [DeleteModel class consiste of the functions use to handle the databse for deleteing blog]
   */
	class DeleteModel{
		/**
		 * [delete fucntion is used to delete the blog]
		 * @param  [int] $value [handles the blog id]
		 * @return [null]
		 */
		function delete($value) {
			/**
			* [$con is used to connect to the database]
			* [$con is used to handle the sql styatement]
			 */
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "DELETE FROM `blogs` WHERE id = '$value'";
			$con -> query($sql);
				header("location: /mvc/index.php/User/home");
			}
		}
?>-
