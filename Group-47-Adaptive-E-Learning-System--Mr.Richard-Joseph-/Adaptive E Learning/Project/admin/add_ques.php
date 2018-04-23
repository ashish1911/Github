<?php
session_start();
$aid=$_SESSION['aid'];

$type=$_POST['ttype'];
$name=$_POST['tname'];
$sname=$_POST['tsub'];

$ques=$_POST['ques'];
$cans = $_POST['cans']; 
$wans1 = $_POST['wans1']; 
$wans2 = $_POST['wans2']; 
$wans3 = $_POST['wans3']; 

$con = mysqli_connect("localhost","root","","adaptive");

$sql = "insert into question_table values(NULL,'$aid','$type','$name','$sname','$ques','$cans','$wans1','$wans2','$wans3')";

$result = mysqli_query($con,$sql);
if($result){
	echo "Question Successfully Entered<br>";
	echo "<a href='Add_Question.php'>Add More Questions</a>";
	echo "<a style='margin-left:100px;' href='ViewLO.php'>View Learning Objects</a>";
}
else{
	echo "error".mysqli_error($con);
}
?>