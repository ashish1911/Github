<?php
session_start();
if(isset($_REQUEST["nama"])){
	$sub = $_REQUEST['type'];
	$topic = $_REQUEST['sname'];
	
    // Get parameters
    $file = urldecode($_REQUEST["nama"]); // Decode URL-encoded string
    $filepath = "admin/Data/".$sub."/".$topic."/". $file;
    
	$uid = $_SESSION['uid'];
				
				$sql1="select * from download where uid='$uid'";
				$result=mysqli_query($con,$sql1);
				$row=mysqli_fetch_assoc($result);
				
				$chk_uid = $row['uid'];
				
				if($uid == $chk_uid)
				{
					$update_response = "update download set link1='$q1',q2='$q2',q3='$q3',q4='$q4' where uid='$uid'";
				
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
	
	
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
?>