<?php
session_start();
$_SESSION["user"]=null;

echo '<script>window.location="login.php";</script>';

?>