<?php
session_start();
$uid = $_SESSION['uid'];

$con = mysqli_connect("localhost","root","","adaptive");
$sql = "Select * from user_info where uid='$uid'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if($row['sequence']>=0){
	$obj = json_decode($row['sequence']);
	var_dump($obj);
}


$sql1 = "select * from topic_1 where sname = 'BFS'";
$res1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($res1);



	
	echo "<a href='?link=sname' name='sname'>".$row1['sname']."</a><br>";
	
	echo "<a href='?link=intro' name='intro'>".$row1['intro']."</a><br>";
	
	echo "<a href='?link=algo' name='algo' >".$row1['algo']."</a><br>";
	
	echo "<a href='?link=flow' name='flow' >".$row1['flow']."</a><br>";
	
	echo "<a href='?link=eg' name='eg' >".$row1['eg']."</a><br>";
	
	echo "<a href='?link=impl' name='impl' >".$row1['impl']."</a><br>";
	
	echo "<a href='?link=video' name='video' >".$row1['video']."</a><br>";

	$arr = [6];
	$link = @$_GET['link'];
	
		if( $link =='sname'){
			array_push($arr,$arr,'sname');
		}
		if( $link =='intro'){
			array_push($arr,'intro');
		}
		if( $link =='algo'){
			array_push($arr,'algo');
		}
		if( $link =='flow'){
			array_push($arr,'flow');
		}
		if( $link =='eg'){
			array_push($arr,'eg');
		}
		if( $link =='impl'){
			array_push($arr,'impl');
		}
		if( $link =='video'){
			array_push($arr,'video');
		}
	
	
var_dump($arr);

?>