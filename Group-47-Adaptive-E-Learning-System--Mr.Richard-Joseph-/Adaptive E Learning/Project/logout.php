<?php
	session_start();
	session_destroy();
	echo "<script>window.open('Login.html','_self')</script>";
?>