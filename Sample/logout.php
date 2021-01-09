<?php
session_start();
session_destroy();
unset($_SESSION['id']);
header('location:/sample/index.php');
exit();
?>