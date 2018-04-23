<?php
	session_start();
	session_destroy();
	echo "<script>window.open('Admin.html','_self')</script>";
?>