<?php
session_start();
session_unset();
session_destroy();
// ob_start();
header("location:user_login.php");
// ob_end_flush();
// include 'user_login.php';
exit();
?>