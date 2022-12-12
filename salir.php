<?php 

	session_start();

	unset($_SESSION['user']);

	header("location:../index1.php");

 ?>