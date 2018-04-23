<?php

session_start();
include("db/db.php");

	$uid = $_SESSION['uid'];
	//$text = "";
	$type_of_learner = "";
	
	
			$get_response = "select * from question_1 where uid='$uid'";
			$run_response = mysqli_query($con,$get_response);
			$row=mysqli_fetch_assoc($run_response);	
			
			$q1 = $row['q1'];
			$q2 = $row['q2'];
			$q3 = $row['q3'];
			$q4 = $row['q4'];
			
			
			$A=0;
			$B=0;
			$C=0;
			
			for( $i = 1 ; $i < 5; $i++ )
			{
				if(${"q".$i} == 'A')
					{
						$A++;
					}

				else if(${"q".$i} == 'B')
					{
						$B++;
					}
						
				else if(${"q".$i} == 'C')
					{
						$C++;
					}
				
					
				
			}
			
			echo "Number of Agree in Response for $uid is :".$A."<br>";
			echo "Number of Neutral in Response for $uid is :".$B."<br>";
			echo "Number of Disagree in Response for $uid is :".$C."<br>";
			
			if($A >= $C && $A >= $B)
			{
				echo "<script>alert('You are an Introvert Person')</script>";
				$_SESSION['TOP'] = 'Introvert';
				echo "<script>window.open('modal.php','_self')</script>";
			}
			else if($C >= $A && $C >= $B)
			{
				echo "<script>alert('You are an Extrovert Person')</script>";
				$_SESSION['TOP'] = 'Extrovert';
				echo "<script>window.open('modal.php','_self')</script>";
			}
			else if($B >= $A || $B >= $C)
			{
				echo "<script>alert('You are an Ambivert Person')</script>";
				$_SESSION['TOP'] = 'Ambivert';
				echo "<script>window.open('modal.php','_self')</script>";
			}
			else{
				echo "Error";
			}
			//echo "<script>var a = confirm('Lets Start the Show');window.open('modal.php','_self')</script>";
			
?>