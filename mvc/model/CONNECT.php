<?php
/**
 * [ConnetModel contains all the model functions needed to connect to the database which either require fetching or storing of data]
 */
class ConnectModel {

  /**
   * [add function is used to connect to database and add detail in the table]
   */
  function add() {
    include('model/DBCON.php');
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
    $sql = "INSERT INTO blogs (title, image, content, username)
            VALUES ('$title', '$img', '$content', '$usr')";
    echo "add data";
    $con -> query($sql);
      header("location: /index.php/USER/userhome");
  }

  /**
   * [blog function is to connect to the databse and fetch blog ionfo]
   * @param  [int] $value [the user id goes in it]
   * @return [null]
   */
  function blog($value) {
    include('model/DBCON.php');
    /**
     * [$con connects with the database]
     * [$sql handles the sql statement]
     * [$reult handles the returned value from databse int he form of table]
     * [$object is the object of BlogView class]
      */
    $sql = "SELECT * FROM blogs WHERE id = '$value'";
    $result = $con -> query($sql);
    $row = $result -> fetch_assoc();
    if (!empty($row['title'])) {
      include ('view/BLOG.php');
      $object = new BlogView;
      $object -> show($row);
    }
    else {
      include('view/ERROR.html');
    }
  }

  /**
   * [delete fucntion is used to delete the blog]
   * @param  [int] $value [handles the blog id]
   * @return [null]
   */
  function delete($value) {
    include('model/DBCON.php');
    /**
    * [$con is used to connect to the database]
    * [$con is used to handle the sql styatement]
     */
    $sql = "DELETE FROM `blogs` WHERE id = '$value'";
    $con -> query($sql);
      header("location: /index.php/USER/userhome");
  }

  /**
   * [edit_show function takes the blog id and returns the details]
   * @param  [int] $value [handles the blog id]
   * @return [mysqli]        [returns the output from the database]
   */
  function edit_show($value) {
    include('model/DBCON.php');
    /**
     * [$con is used tpo connect to the database]
     * [$sql handles the dql statement]
     * [$result handles the output from the execution of sql query]
     */
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
    include('model/DBCON.php');
    $title = $_POST['title'];
    $usr = $_SESSION['user_id'];
    $img = $_FILES['image']['name'];
    $tmp_img = $_FILES['image']['tmp_name'];
    $img_locate = "img/" . $img;
    move_uploaded_file($tmp_img,$img_locate);
    $content = $_POST['contents'];
    if (isset($img) && !empty($img)) {
      $sql = "UPDATE blogs SET title = '$title', image = '$img_locate', content = '$content' WHERE id =
        '$value' and username = '$usr'";
    }
    else {
      $sql = "UPDATE blogs SET title = '$title', content = '$content' WHERE id =
        '$value' and username = '$usr'";
    }
    $con -> query($sql);
      header("location: /index.php/USER/userhome");
  }

  /**
   * [home fucntion is to connect to the databse and fetch the blog details]
   * @return [null]
     */
  function home() {
    include('model/DBCON.php');
    /**
    * [$con is used to connect to the database]
     * [$sql is used to handle the sql statement]
     * [$result is used to handle the output from the database]
     */
    $sql = "SELECT * FROM blogs order by created_at DESC";
    $result = $con -> query($sql);
    include('view/HOME.php');
    /**
     * [$object is the object of HoemView to use its funtions]
     * @var HomeView
     */
    $object = new HomeView;
    $object -> show($result);
  }

  /**
   * [Login function handles connecting to the databse for fetchinmg the details]
   */
  function login() {
    include('model/DBCON.php');
    $user = $_POST['uname'];
    $pass = $_POST['psw'];
    $sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
    $result = $con -> query($sql);
    $row = $result -> fetch_assoc();
    return $row;
  }

  /**
   * [home function is used to connect to the databse and fetch output]
   * @param  [int] $user [handles the logged in user id]
   * @return [null]
   */
  function userhome($user) {
    include('model/DBCON.php');
    /**
    * [$con is used to connect to the database]
    * [$sql is used to handle the sql statement]
     * [$result is used to handle the output from the database]
     */
    $sql = "SELECT * FROM blogs WHERE username = '$user' order by created_at DESC";
    $result = $con -> query($sql);
    include('view/HOME.php');
    /**
     * [$object is the object of the HoemView class to use its fnx]
     * @var HomeView
     */
    $object = new HomeView;
    $object -> show($result);
  }
}

?>
