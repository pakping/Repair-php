<?php
// set the expiration date to one hour ago
setcookie($_SESSION["username"], time() - 86400 * 30);
?>