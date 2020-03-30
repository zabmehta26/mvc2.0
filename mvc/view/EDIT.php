<!--
/**
 * the file is used to show the fetched detail from the user on the basis of which editing is done
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
    <h2 style = "text-align: center;">Edit Post</h2>
    <?php
    /**
     * [EditView class is used for the interaction with the user]
     */
    class EditView {
      /**
       * [edit function performs the functionality of interacting with the user to fetch detail from the ui]
       * @param  [mysqli] $result [handles the blog details]
       * @return [null]
       */
      function edit($result) {
        while ($row = $result -> fetch_assoc()) {
          echo "<form action = '/index.php/Edit/edit_feed/" . $row['id'] . "' method = 'POST' enctype = 'multipart/form-data'>";
          $words = explode("/", $row['image']);
          echo "<div><label for = 'title'>Title</label>";
          echo "<input type = 'text' placeholder = 'Blog title here' name = 'title' value = '" . $row['title']
             . "'></input>";
          echo "</div><div><label for = 'image'>Image</label>";
          echo "<input type = 'file' name = 'image'></input>" . $words[2];
          echo "</div><div><label for = 'contents'>Content</label>";
          echo "<textarea placeholder = 'Please add the blog content here' name = 'contents' cols = 20 rows = 20>" . $row['content'] . "</textarea></div>";
          echo "<p><input type = 'submit' name = 'submit' value = 'Edit Post' /></p>";
        }
      }
    }
    ?>
    </form>
  </body>
</html>
