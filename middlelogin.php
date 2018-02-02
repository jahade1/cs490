<?php

$info = file_get_contents('php://input'); //reads raw data coming from frontlogin.php

$login = curl_init(); //initalizes curl session

curl_setopt($login, CURLOPT_URL, "backlogin.php") //tells server to grab that url
curl_setopt($login, CURLOPT_POST, 1); //tells server were sending info using post
curl_setopt($login, CURLOPT_POSTFIELDS, $info) // sends that info recieved from frontlogin.php
curl_setopt($login, CURLOPT_FOLLOWLOCATION, 1) // tells program to follow that information sent
$outlogin = curl_exec($login);
curl_close($login);


?>
