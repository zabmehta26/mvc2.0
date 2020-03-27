/**
 * the file is used to show the login page to the user on the ui and take the credentials from the user for loggin in
 */
<!DOCTYPE html>
<html>
  <head>
    <meta name = "viewport" content = "width=device-width">
    <link rel = "stylesheet" type = "text/css" href = "/mvc/view/login.css">
  </head>
  <body>
    <div class = "container">
      <h1>Login Form</h1>
      <br>
      <br>
      <form action = "/mvc/index.php/Login/login_check" method = "post">
        <input type = "text" placeholder = "Enter Username" name = "uname" required>
        <br>
        <input type = "password" placeholder = "Enter Password" name = "psw" required>
        <br>
        <br>
        <button type = "submit"><b>Login</b></button>
        <br>
    </form>
  </body>
</html>
