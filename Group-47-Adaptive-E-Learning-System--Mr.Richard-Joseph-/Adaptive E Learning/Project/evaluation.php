<?php 
session_start();
if($_POST)
{
	include("db/db.php");
	
				
				$q1 = $_POST['question-1-answers'];
				$q2 = $_POST['question-2-answers'];
				$q3 = $_POST['question-3-answers'];
				$q4 = $_POST['question-4-answers'];
				
				$uid = $_SESSION['uid'];
				
				$sql1="select * from question_1 where uid='$uid'";
				$result=mysqli_query($con,$sql1);
				$row=mysqli_fetch_assoc($result);
				
				$chk_uid = $row['uid'];
				
				if($uid == $chk_uid)
				{
					$update_response = "update question_1 set q1='$q1',q2='$q2',q3='$q3',q4='$q4' where uid='$uid'";
				
					$run = mysqli_query($con,$update_response);

					if($run){
						echo "<script>alert('Response Updated Successfully in Question Table! ')</script>";
						echo "<script>window.open('evaluation_1.php','_self')</script>";
					}
					else{
						 echo "<script>alert('Something went Wrong in Update in Question Table!! Please Try Again.')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
				}
				else{
				$insert_response = "insert into question_1(uid,q1,q2,q3,q4) values('$uid','$q1','$q2','$q3','$q4');";
				
				$run = mysqli_query($con,$insert_response);

					if($run){
						echo "<script>alert('Response inserted Successfully in Question Table! ')</script>";
						echo "<script>window.open('evaluation_1.php','_self')</script>";
					}
					else{
						 echo "<script>alert('Something went Wrong in Insert in Question Table!! Please Try Again.')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
				}
				
				//echo "Question 1".$q1."<br>";
				//echo "Question 2".$q2."<br>";
				//echo "Question 3".$q3."<br>";
				//echo "Question 4".$q4."<br>";
}
	