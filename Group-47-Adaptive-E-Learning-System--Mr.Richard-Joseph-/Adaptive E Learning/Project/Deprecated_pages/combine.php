<?php
session_start();
include("db/db.php");
$uid = $_SESSION['uid'];

$sql = "SELECT * FROM question_1 AS q INNER JOIN Learning_obj AS l ON q.uid = l.uid WHERE l.uid='$uid'";
$run = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($run);	
$LO = "";

$top = $_SESSION['TOP'];
$tol = $_SESSION['TOL'];


if(($top == 'Introvert' || 'Ambivert') && $tol == 'Curiosity' || $top == ('Introvert'|| 'Ambivert') && $tol == 'Learning')
	{
		$LO = "StepByStep_IC";
	}
	else if(($top == 'Introvert' || 'Ambivert') && $tol == 'Project')
	{
		$LO = "PointWise_IP";
	}
	else if($top == 'Extrovert' && $tol == 'Curiosity' || $top == 'Introvert' && $tol == 'Learning')
	{
		$LO = "StepByStep_EC";
	}
	else if($top == 'Introvert' && $tol == 'Project')
	{
		$LO = "PointWise_EP";
	}
else{
	echo "Error ! Something went wrong.";
}

$_SESSION['LO'] = $LO;
echo $_SESSION['LO'];

$sql = "select * from lo where uid='$uid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$u_id = $row['uid'];

if($u_id == $uid)
{
$insert_user = "update lo set LO='$LO' where uid='$u_id'";

        $run_user = mysqli_query($con,$insert_user);

        if($run_user){
            echo "<script>alert('LO updated Successfully')</script>";
            echo "<script>window.open('home1.php','_self')</script>";
        }	
		else{
			 echo "<script>alert('Something went Wrong in Update!! Please Try Again.')</script>";			
		}
}else{

	
	$insert_user = "insert into lo values('$uid','$LO')";

        $run_user = mysqli_query($con,$insert_user);

        if($run_user){
            echo "<script>alert('LO Inserted Successfully')</script>";
            echo "<script>window.open('home1.php','_self')</script>";
        }else{
		echo "<script>alert('Something went Wrong in Insert!! Please Try Again.')</script>";			
		}
}
		
		 









?>
