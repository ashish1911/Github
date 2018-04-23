<?php

// This is the data you want to pass to Python
$data = array("name" => "Hagrid", "age" => "36");                                                                    

// Execute the python script with the JSON data
#$result = shell_exec('C:\\Python35\\python.exe C:\\xampp\\htdocs\\Adaptive E-Learning\\Project\\myscript.py ' . escapeshellarg(json_encode($data)));

// Decode the result
$resultData = json_encode($data);
var_dump($resultData);
// This will contain: array('status' => 'Yes!')


                                                                                                                     
$ch = curl_init('http://127.0.0.1:5000/');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $resultData);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($resultData))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
var_dump(json_decode($result, true));
$ability = (json_decode($result, true));
/*
$pyscript = 'C:\\xampp\\htdocs\\Adaptive E-Learning\\Project\\myscript.py ';
$python = 'C:\\Python35\\python.exe';
$filePath = 'C:\\xampp\\htdocs\\Adaptive E-Learning\\Project\\test_2.php ';
$cmd = "$python $pyscript $filePath";
$os = shell_exec("$cmd");
echo $os;
*/
?>