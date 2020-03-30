<!--
/**
 * the file takes the input from the user from the ui
 */
-->
<!DOCTYPE html>
  <head>
    <link rel = "stylesheet" href = "/view/default.css">
    <link rel = "stylesheet" href = "/view/layout.css">
    <link rel = "stylesheet" href = "/view/navcss.css">
    <title>Add content to blogs</title>
  </head>
  <body>
    <h2 style = "text-align: center;">Add Post</h2>
    <?php echo "<form action = '/index.php/Add/add_feed/' method = 'POST' enctype = 'multipart/form-data'>"; ?>
      <div>
        <label for = 'title'>Title</label>
        <input type = 'text' name = 'title'></input>
      </div>
      <div>
        <label for = 'image'>Image</label>
        <input type = 'file' name = "image"></input>
      </div>
      <div>
        <label for = 'contents'>Content</label>
        <textarea name = 'contents' cols = 20 rows = 20></textarea>
      </div>
      <p><input type = 'submit' name = 'submit' value = 'Add Post' /></p>
    </form>
  </body>
</html>
