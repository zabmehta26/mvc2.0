<?php
  /**
   * [EditControl class is used to include the functionality of edit file from model and edit file from view]
   */
	class EditControl {
		/**
		 * [edit function is used to create object of EditModel class and Edit view class to perform the editing functionality]
		 * @param  [int] $value [handles the blog id to be edited]
		 * @return [null]
  		 */
		function edit($value) {
			include('model/Edit.php');
			/**
			 * [$object is the object of EditModel type used to call its fnx]
			 * @var EditModel
			 */
			$object = new EditModel;
			/**
			 * [$result is used to handle the returned value from the database]
			 * @var [mysqli]
			 */
			$result = $object -> edit_show($value);
			include('view/Edit.php');
			/**
			 * [$object is the object of EditView type used to call its fnx]
			 * @var EditView
			 */
			$object = new EditView;
			$object -> edit($result);
		}
		function edit_feed($value) {
			include('model/Edit.php');
			/**
			 * [$object is the object of EditModel type used to call its fnx]
			 * @var EditModel
			 */
			$object = new EditModel;
			$object -> edit($value);
		}
	}

?>
