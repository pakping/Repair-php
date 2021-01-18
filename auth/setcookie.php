<?php
$name = $objResult["Username"];
$cookie_value = "John Doe";
setcookie($name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$name])) {
  echo "Cookie named '" . $name . "' is not set!";
} else {
  echo "Cookie '" . $name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$name];
}
?>
