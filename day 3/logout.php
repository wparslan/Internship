<?php
session_start();
session_unset();  // session unset and your id will logout

header("Location: login.php");  // after logout, login page will display


?>
