<?php 
session_start();
$uid = $_SESSION['uid'];
$topic = 'BFS';
$con = mysqli_connect("localhost","root","","adaptive");

$select = "select * from discrimination where topic='$topic'";
$rex = mysqli_query($con,$select);
$count_users = mysqli_num_rows($rex);


$sql = "Select * from discrimination where topic='$topic' and score=(select max(score) from discrimination where topic='$topic') limit 1";
$result = mysqli_query($con,$sql);

$return_arr1 = array();

while ($row = mysqli_fetch_array($result)) {
    $row_array['id'] = $row['id'];
	$row_array['uid'] = $row['uid'];
	$row_array['topic'] = $row['topic'];
    $row_array['q1'] = $row['q1'];
    $row_array['q2'] = $row['q2'];
	$row_array['q3'] = $row['q3'];
	$row_array['q4'] = $row['q4'];
	$row_array['q5'] = $count_users;
	$row_array['q6'] = $count_users;
	$row_array['q7'] = $count_users;
	$row_array['q8'] = $count_users;
    array_push($return_arr1,$row_array);
}
#echo json_encode($return_arr1);


## Last Row
$sql = "Select * from discrimination where topic='$topic' and score=(select min(score) from discrimination where topic='$topic')  limit 1";
$result1 = mysqli_query($con,$sql);

$return_arr2 = array();

while ($row = mysqli_fetch_array($result1)) {
    $row_array['id'] = $row['id'];
	$row_array['uid'] = $row['uid'];
	$row_array['topic'] = $row['topic'];
    $row_array['q1'] = $row['q1'];
    $row_array['q2'] = $row['q2'];
	$row_array['q3'] = $row['q3'];
	$row_array['q4'] = $row['q4'];
    array_push($return_arr2,$row_array);
}
#echo json_encode($return_arr2);

// Call to Python file 

$resultData1 = json_encode($return_arr1);
var_dump($resultData1);
$resultData2 = json_encode($return_arr2);

// This will contain: array('status' => 'Yes!')
                                                                                                                     
$ch = curl_init('http://127.0.0.1:5000/api');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $resultData1);                                                              
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($resultData1))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
curl_close($ch);
var_dump(json_decode($result, true));
$ability = (json_decode($result, true));

#$_SESSION['ability'] = $ability;

#HEADER("location:ability.php");



$update = "update user_info set ability='$ability' where uid='$uid'";
$rex1 = mysqli_query($con,$update);

if($rex1){
	echo "<script>alert(Ability updated in user table);</script>";
	echo "<script>window.open('home1.php','_self');</script>";
}else{
	echo "Ability update error".mysqli_error($con);
}














?>