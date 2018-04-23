<?php
$ch = curl_init("127.0.0.1:5000/lokesh");
$fp = fopen("dreamhost_feed.txt", "w+");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>