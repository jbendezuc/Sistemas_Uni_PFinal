<?php
include_once ('seguridad.php');
session_start();
unset($_SESSION);
session_destroy();
header('location: login.html');
?>
