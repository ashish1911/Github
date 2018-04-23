<?php
	
    include("db/db.php");

    $email = mysqli_real_escape_string($con,$_POST['email']);

    $pass = mysqli_real_escape_string($con,$_POST['password']);
    
    $get_user = "select * from admin_info where aemail='$email' AND apass='$pass'";

	$run_user = mysqli_query($con,$get_user);
    $row_user = mysqli_fetch_array($run_user);
    $count = mysqli_num_rows($run_user);
    
    $a_id = $row_user['aid'];
    $a_name = $row_user['aname'];
	$a_email = $row_user['aemail'];
    if($count==1){
	session_start();
    $_SESSION['a_email'] = $a_email;
    $_SESSION['aid'] = $a_id;
    $_SESSION['a_name'] = $a_name;
       echo "<script>alert('You are Logged in')</script>";		
	echo "<script>window.open('admin_home.php','_self')</script>";
		
		
    }
    else {
        echo "<script>alert('Admin Email or Password is Wrong')</script>";
        echo "<script>window.open('Admin.html','_self')</script>";
    }
?>