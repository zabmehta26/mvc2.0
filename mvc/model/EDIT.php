<?php
  /**
   * [EditModel class handles the connecting to databse task and fetching of the output]
   */
	class EditModel{
		/**
		 * [edit_show function takes the blog id and returns the details]
		 * @param  [int] $value [handles the blog id]
		 * @return [mysqli]        [returns the output from the database]
		 */
		function edit_show($value) {
			/**
			 * [$con is used tpo connect to the database]
			 * [$sql handles the dql statement]
			 * [$result handles the output from the execution of sql query]
			 */
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "SELECT * FROM blogs WHERE id = '$value'";
			$result = $con -> query($sql);
			return $result;
		}

    /**
     * [edit function does the original editing of the blog]
     * @param  [int] $value [handles the blog id]
     * @return [null]
     */
		function edit($value) {
			$title = $_POST['title'];
			$usr = $_SESSION['user_id'];
			$img =  basename($_FILES['image']['name'];
			$tmp_img = $_FILES['image']['tmp_name'];
			$img_locate = "img/" . $img;
			move_uploaded_file($tmp_img,$img_locate);
			$content = $_POST['contents'];
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "UPDATE blogs SET title = '$title', image = '$img_locate', content = '$content' WHERE id =
				'$value' and username = '$usr'";
			$con -> query($sql);
				header("location: /index.php/User/userhome");
			}
		}
?>
