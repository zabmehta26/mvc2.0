<link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$control = 'home';
$function = 'home';
$param = $_SERVER['REQUEST_URI'];
$parameters = explode("/", $param);
if (isset($parameters[3]) && $parameters[3]!='') {
	$control = $parameters[3];
}
if (isset($parameters[4]) && $parameters[4]!='') {
	$function = $parameters[4];
}
if (isset($parameters[5]) && $parameters[5]!='') {
	$any = $parameters[5];
}
session_start();
include('nav.php');
echo "<br><br>";
include('control/' . $control . '.php');
$class = $control . 'Control';
$obj = new $class;
if (isset($any)) {
  $obj -> $function($any);
}
else {
  $obj -> $function();
}
?>
