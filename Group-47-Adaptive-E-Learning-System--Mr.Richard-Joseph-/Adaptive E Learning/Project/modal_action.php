<?php
session_start();

	include("db/db.php");
	$uid = $_SESSION['uid'];
	$objective = $_REQUEST['value'];
	$personality = $_SESSION['TOP'];
	
	
	$sql1="select * from person where uid='$uid'";
	$result=mysqli_query($con,$sql1);
	$row=mysqli_fetch_assoc($result);
	
	$chk_uid = $row['uid'];
				
	if($uid == $chk_uid)
	{
		$update_response = "update person set 
							personality='$personality',
							objective ='$objective' 
							where uid='$uid'";
				
		$run = mysqli_query($con,$update_response);

		if($run){
			echo "success update";
			echo "<script>alert('Response Updated Successfully in Person Table! ')</script>";
			echo "<script>window.open('home1.php','_self')</script>";
		}else {
			echo "Error update".mysqli_error($con);
			echo "<script>alert('Something went Wrong in Update in Person Table!! Please Try Again.')</script>";
		}
	}
	else{
	
			$insert_response = "insert into person(uid,personality,objective) 
								values('$uid','$personality','$objective');";
						
			$run = mysqli_query($con,$insert_response);

			if($run){
				echo "Success Insert";
				echo "<script>alert('Response inserted Successfully in Person Table! ')</script>";
				echo "<script>window.open('home1.php','_self')</script>";
			} else {
				echo "Error Insert".mysqli_error($con);
				
				echo "<script>alert('Something went Wrong in Insert in Person Table!! Please Try Again.')</script>";
				}
		}
	
	
?>