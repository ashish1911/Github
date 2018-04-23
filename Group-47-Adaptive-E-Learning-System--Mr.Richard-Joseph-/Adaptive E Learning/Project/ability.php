<?php
session_start();
$uid = $_SESSION['uid'];
$con = mysqli_connect("localhost","root","","adaptive");


$update = "update user_info set ability='$ability' where uid='$uid'";
$rex1 = mysqli_query($con,$update);

if($rex1){
	echo "<script>Ability updated in user table</script>";
}else{
	echo "Ability update error".mysqli_error($con);
}


?>