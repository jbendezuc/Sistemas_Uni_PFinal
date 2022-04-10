<?php
session_start();

if($_SESSION['acceso']<>'c0nc3diD0'){
	// regresar a login
	header('location: login.html');
}
?>
