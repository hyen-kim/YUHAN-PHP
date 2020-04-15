<?php
# nl2br() 함수의 예
$str = "PHP Web

        Programming";   # 문자열 구성

echo "$str<br>";  # 엔터키가 먹지 않음
echo "========= <br>";

$str = nl2br("$str"); #$str이라는 문자열에 함수를 적용 => 엔터키를 <br>태그로 바꿔줌
echo $str;            # 엔터키가 먹음
 ?>
