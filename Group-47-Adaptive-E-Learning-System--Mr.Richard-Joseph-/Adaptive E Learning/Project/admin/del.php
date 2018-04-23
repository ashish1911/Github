<?php
session_start();
	if(!isset($_SESSION['aid'])){
		echo "<script>window.open('admin_home.php','_self')</script>";
	}
	else {

	if(isset($_SESSION['aid'])){
		$conn=mysqli_connect('localhost','root','');
		mysqli_select_db($conn,'adaptive');
		$delete_id = $_GET['uid'];
		$delete_sql = "delete from user_info where uid='$delete_id'";
		$run_delete = mysqli_query($conn,$delete_sql);
		if($run_delete){
			echo "<script>alert('User Has been deleted')</script>";
			echo "<script>window.open('MUser.php','_self')</script>";
		}
		else{
	echo mysqli_error($conn);
}
	}
 
	} 
?>