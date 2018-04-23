<?php
session_start();
include("db/db.php");
$uid = $_SESSION['uid'];

			$get_response = "select * from Learning_obj where uid='$uid'";
			$run_response = mysqli_query($con,$get_response);
			$row=mysqli_fetch_assoc($run_response);	
			
			$l1 = $row['l1'];
			$l2 = $row['l2'];
			$l3 = $row['l3'];
			$l4 = $row['l4'];
			
			//$vowels=array('a','e','i','o','u');
			//$len=strlen($s);
			$P=0;
			$Q=0;
			$R=0;
			
			for( $i = 1 ; $i < 5; $i++ )
			{
				if(${"l".$i} == 'A')
					{
						$P++;
					}

				else if(${"l".$i} == 'B')
					{
						$Q++;
					}
						
				else if(${"l".$i} == 'C')
					{
						$R++;
					}
				
					
				
			}
			
			echo "Number of Agree in Response for $uid is :".$P."<br>";
			echo "Number of Neutral in Response for $uid is :".$Q."<br>";
			echo "Number of Disagree in Response for $uid is :".$R."<br>";
			
			if($P > $R && $P > $Q)
			{
				echo "<script>alert('Learning Objective : Curiosity !')</script>";
				$_SESSION['TOL'] = 'Curiosity';
			}
			else if($R > $P && $R > $Q)
			{
				echo "<script>alert('Learning Objective : Project !')</script>";
				$_SESSION['TOL'] = 'Project';
			}
			else if($Q > $P || $Q > $R)
			{
				echo "<script>alert('Learning Objective : Learning !')</script>";
				$_SESSION['TOL'] = 'Learning';
			}
			
			echo $_SESSION['TOL'];
			echo "<script>var a = confirm('Lets Start the Show');window.open('combine.php','_self')</script>";
			
?>
	