<?php
session_start();
$aid=$_SESSION['aid'];
$name=$_POST['tname'];
$sname=$_POST['tsub'];
$type=$_POST['ttype'];
$descp=$_POST['tdesc'];
$intro=$_FILES['intro']['name'];
$algo=$_FILES['algo']['name'];
$flow=$_FILES['flow']['name'];
$eg=$_FILES['eg']['name'];
$impl=$_FILES['impl']['name'];
$video=$_FILES['video']['name'];
$keyword = $_POST['key']; 


$arr = explode(',', $keyword);
$nkey = json_encode($arr);
$date1=date("Y-m-d");

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'adaptive');


if($type == "")
{
	die("Data Insufficient");
}



if($type=="DS")
{
	
if(!is_dir("Data/DS/$sname/")) {
    mkdir("Data/DS/$sname/");
}

move_uploaded_file($_FILES['intro']['tmp_name'],"Data/DS/$sname/".$_FILES['intro']['name']);
move_uploaded_file($_FILES['algo']['tmp_name'],"Data/DS/$sname/".$_FILES['algo']['name']);
move_uploaded_file($_FILES['flow']['tmp_name'],"Data/DS/$sname/".$_FILES['flow']['name']);
move_uploaded_file($_FILES['eg']['tmp_name'],"Data/DS/$sname/".$_FILES['eg']['name']);
move_uploaded_file($_FILES['impl']['tmp_name'],"Data/DS/$sname/".$_FILES['impl']['name']);
move_uploaded_file($_FILES['video']['tmp_name'],"Data/DS/$sname/".$_FILES['video']['name']);

echo "Stored in DS";
//closedir("Data/DS/$sname/");
}

else if($type=="J")
{
	
if(!is_dir("Data/DS/$sname/")) {
    mkdir("Data/DS/$sname/");
}

move_uploaded_file($_FILES['intro']['tmp_name'],"Data/J/$sname/".$_FILES['intro']['name']);
move_uploaded_file($_FILES['algo']['tmp_name'],"Data/J/$sname/".$_FILES['algo']['name']);
move_uploaded_file($_FILES['flow']['tmp_name'],"Data/J/$sname/".$_FILES['flow']['name']);
move_uploaded_file($_FILES['eg']['tmp_name'],"Data/J/$sname/".$_FILES['eg']['name']);
move_uploaded_file($_FILES['impl']['tmp_name'],"Data/J/$sname/".$_FILES['impl']['name']);
move_uploaded_file($_FILES['video']['tmp_name'],"Data/J/$sname/".$_FILES['video']['name']);

echo "Stored in J";
//closedir("Data/DS/$sname/");
}

else if($type=="OS")
{
	
if(!is_dir("Data/DS/$sname/")) {
    mkdir("Data/DS/$sname/");
}

move_uploaded_file($_FILES['intro']['tmp_name'],"Data/OS/$sname/".$_FILES['intro']['name']);
move_uploaded_file($_FILES['algo']['tmp_name'],"Data/OS/$sname/".$_FILES['algo']['name']);
move_uploaded_file($_FILES['flow']['tmp_name'],"Data/OS/$sname/".$_FILES['flow']['name']);
move_uploaded_file($_FILES['eg']['tmp_name'],"Data/OS/$sname/".$_FILES['eg']['name']);
move_uploaded_file($_FILES['impl']['tmp_name'],"Data/OS/$sname/".$_FILES['impl']['name']);
move_uploaded_file($_FILES['video']['tmp_name'],"Data/OS/$sname/".$_FILES['video']['name']);

echo "Stored in OS";
//closedir("Data/DS/$sname/");
}
else{
	echo "Not stored ";
}

$count = 0;
$status = 0;
$sql="INSERT INTO topic_1(name,sname,descp,keyword,type,intro,algo,flow,eg,impl,video,aid,date,count,status) values('$name','$sname','$descp','$nkey','$type','$intro','$algo','$flow','$eg','$impl','$video','$aid','$date1','$count','$status')"; 

if(mysqli_query($conn,$sql))
{
echo "Data successfully entered";
echo "<br><br><br>";	
echo "<a href='AddLO.php'>Add More ?</a>";
mysqli_close($conn);
}
else{
	echo "Error".mysqli_error($conn);
}


?>