<?php
  /**
   * [AddModel class is the main class of the files whose functions do the working for the add of blog]
   */
	class AddModel {
		/**
		 * [add function is used to connect to database and add detail in the table]
		 */
		function add() {
			/**
			* [$title variable handles the title from the login page]
			* [$image variable handles the image]
			* [$target_dir variable handles the path from the chosen image file]
			* [$usr variable handles the id of the logged in user]
			* [$file_name variable handles the full path of the image file]
			 */
			$title = $_POST['title'];
			$image = $_POST['image'];
			$target_dir = "img/";
			$usr = $_SESSION['user_id'];
			$file_name = basename($_FILES["image"]["name"]);
   		$target_file = $target_dir . $file_name;
   		$img = $target_file;
			$content=$_POST['contents'];
			move_uploaded_file($file_name, $target_file);
			$con = mysqli_connect("localhost", "zab", "bla", "project");
			$sql = "INSERT INTO blogs (title, image, content, username)
							VALUES ('$title', '$img', '$content', '$usr')";
			echo "add data";
			$con -> query($sql);
				header("location: /mvc/index.php/User/home");
			}
		}
?>
