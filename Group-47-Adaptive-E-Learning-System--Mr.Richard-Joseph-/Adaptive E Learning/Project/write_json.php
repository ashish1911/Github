<?php
session_start();
$uid = $_SESSION['uid'];

$con = mysqli_connect("localhost","root","","adaptive");

$sql = "Select * from grade where uid='$uid'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);



// encode array to json
$json = json_encode(array('data' => $row));
// write json to file
if (file_put_contents("data.json", $json))
    echo "Json Successfully Created";
else 
    echo "Error while creating Json";
// data.json
// {"data":[{"id":"USR1","name":"Steve Jobs","company":"Apple"},{"id":"USR2","name":"Bill Gates","company":"Microsoft"},{"id":"USR3","name":"Mark Zuckerberg","company":"Facebook"}]}
?>