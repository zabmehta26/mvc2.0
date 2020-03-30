<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
$control = 'Home';
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
include('nav.php');
echo "<br><br>";
if(file_exists('control/' . strtoupper($control) . '.php')) {
  include('control/' . strtoupper($control) . '.php');
  $class = $control . 'Control';
  $obj = new $class;
  if (method_exiSts($obj, $function)) {
    if (isset($any)) {
      $obj -> $function($any);
    }
    else {
      $obj -> $function();
    }
  }
  else {
    include('view/ERROR.html');
  }
}
else {
  include('view/ERROR.html');
}
?>
