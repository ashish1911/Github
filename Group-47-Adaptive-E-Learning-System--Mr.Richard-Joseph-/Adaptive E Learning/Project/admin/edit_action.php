<?php
session_start();

    if(isset($_POST['update'])){
  
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'adaptive');
	$uid=$_SESSION['uid'];
	echo $uid;
    $upname = $_POST['upname'];
    $upemail = $_POST['upemail'];
    $uppass = $_POST['uppass'];
   
   
    echo "<script> console.log($upname+ $upemail + $uppass);</script>";
    $update_product ="update user_info 
	set 
	name='$upname',
	email='$upemail',
	pass='$uppass' 
    where uid='$uid'";

    if($run_product = mysqli_query($conn,$update_product)){
        echo "<script> alert('User Details successfully updated ') </script>";
        echo "<script>window.open('MUser.php','_self')</script>";
    }
	else{
	echo mysqli_error($conn);
}
}

?>