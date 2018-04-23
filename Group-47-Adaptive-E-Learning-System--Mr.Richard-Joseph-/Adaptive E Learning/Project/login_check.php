<?php
	
    include("db/db.php");

    $email = mysqli_real_escape_string($con,$_POST['email']);

    $pass = mysqli_real_escape_string($con,$_POST['password']);
    
    $get_user = "select * from user_info where email='$email' AND pass='$pass'";

	$run_user = mysqli_query($con,$get_user);
    $row_user = mysqli_fetch_array($run_user);
    $count = mysqli_num_rows($run_user);
    
    $u_id = $row_user['uid'];
    $u_name = $row_user['name'];
	$u_email = $row_user['email'];
    if($count==1){
	session_start();
    $_SESSION['email'] = $u_email;
    $_SESSION['uid'] = $u_id;
    $_SESSION['name'] = $u_name;
        echo "<script>alert('You are Logged in')</script>";
		
		$get_data = "select * from person where uid='$u_id'";
		
		$if_user = mysqli_query($con,$get_data);
		$found_user = mysqli_fetch_array($if_user);
		$found_id = $found_user['uid'];
		if($found_id == $u_id){
			echo "<script>window.open('home1.php','_self')</script>";
		}
		else{
		echo "<script>window.open('index.php','_self')</script>";	
		}
        
    }
    else {
        echo "<script>alert('user Email or Password is Wrong')</script>";
        echo "<script>window.open('Login.html','_self')</script>";
    }
?>