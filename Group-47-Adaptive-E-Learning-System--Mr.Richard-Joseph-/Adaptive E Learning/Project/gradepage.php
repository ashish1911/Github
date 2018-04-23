<?php
session_start();
$uid = $_SESSION['uid'];

$topic = $_REQUEST['topic'];
$q1 = $_REQUEST['ans1'];
$q2 = $_REQUEST['ans2'];
$q3 = $_REQUEST['ans3'];
$q4 = $_REQUEST['ans4'];

//  Calculating Score

//echo $q1,$q2,$q3,$q4;
$score = 0; 
	for( $i = 1 ; $i < 5; $i++ )
			{
				if(${"q".$i} == '1')
					{
						$score++;
					}
			}
	echo $score;


//Inserting into Multi Dimension Table
$con = mysqli_connect("localhost","root","","adaptive");
$select = "select * from discrimination where uid='$uid' and topic='$topic'";
$res1 = mysqli_query($con,$select);
$c1 = mysqli_num_rows($res1);

if($c1 > 0)
{
	$update = "update discrimination set q1='$q1' , q2='$q2' , q3='$q3' , q4='$q4' ,score='$score' where uid='$uid' and topic='$topic'" ;
	$res2 = mysqli_query($con,$update);
	if($res2){
		echo 'Updated in Discrimination Successfully <br>';
		header("location:json_1.php");
	}else{
		echo 'Update Error in Discrimination <br>'.mysqli_error($con);
	}
	
}
else{
	$insert1 = "insert into discrimination values(NULL,'$uid','$topic','$q1','$q2','$q3','$q4','$score')";
	$res3 = mysqli_query($con,$insert1);
	if($res3){
		echo "Inserted in Discrimination Successfully";
		header("location:json_1.php");
	}else{
		echo "Insert error in Discrimination";
	}
	
}











	$con = mysqli_connect("localhost","root","","adaptive");
	
	$sql = "select * from grade where uid='$uid' and topic='$topic'";
	$res = mysqli_query($con,$sql);	
	$count = mysqli_num_rows($res);
	$row = mysqli_fetch_array($res);
	$prev = $row['score'];
	 
	if($score>$prev)
	{
			if($count>0)
			{
				$sql = "insert into grade values(NULL,'$uid','$topic','$score')";
				$sql = "update grade set score='$score' where uid='$uid' and topic='$topic'";
				$result = mysqli_query($con,$sql);
				if($result)
					{
						echo "<script>Updated Successfully</script>";
						//header("location:json_1.php");
						//echo "<script>window.open('home1.php','_self')</script>";
						
					}
				else{
						echo "Error While Updating".mysqli_error($con);
					}
			}
			else{
				$sql = "insert into grade values(NULL,'$uid','$topic','$score')";
				$result = mysqli_query($con,$sql);
				if($result)
				{
					echo "<script>Inserted Successfully</script>";
					//header("location:json_1.php");
					//echo "<script>window.open('home1.php','_self')</script>";
				}
				else{
					echo "Error While Inserting".mysqli_error($con);
				}
			}
	}
	else{
		echo "<script>alert('Refer Previous Prediction only');</script>";
		//echo "<script>window.open('home1.php','_self')</script>";
	}

?>