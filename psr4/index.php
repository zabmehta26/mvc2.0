<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 use porject\control\ADD;
 use porject\control\BLOG;
 use porject\control\DELETE;
 use porject\control\EDIT;
 use porject\control\HOME;
 use porject\control\LOGIN;
use porject\control\USER;

$control = 'HOME';
$function = 'home';
$param = $_SERVER['REQUEST_URI'];
$parameters = explode("/", $param);
if (isset($parameters[2]) && $parameters[2]!='') {
	$control = $parameters[2];
}
if (isset($parameters[3]) && $parameters[3]!='') {
	$function = $parameters[3];
}
if (isset($parameters[4]) && $parameters[4]!='') {
	$any = $parameters[4];
}
session_start();
include('app/project/nav.php');
echo "<br><br>";
if(file_exists('app/project/control/' . $control . '.php')) {
  include('app/project/control/' . $control . '.php');
  $class = "project\control\\" . $control;
  $obj = new $class;
  if (method_exists($obj, $function)) {
    if (isset($any)) {
      $obj -> $function($any);
    }
    else {
      $obj -> $function();
    }
  }
  else {
    include('app/project/view/ERROR.html');
  }
}
else {
  include('app/project/view/ERROR.html');
}
?>
