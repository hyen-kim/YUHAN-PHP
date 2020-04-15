<?php
# getenv() 함수의 예

$rip = getenv("REMOTE_ADDR");     # 접속자의 ip
$rpc = getenv("HTTP_USER_AGENT");

echo $rip . " : " . $rpc . "<br>";

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

 ?>
