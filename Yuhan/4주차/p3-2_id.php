<?php
  extract($_REQUEST); // 버전차이때문에 값이 안넘어가서 선언해놈

  echo "<html><head><meta charset=utf-8><title>php</title></head><body>";
  echo "아이디 : $id <br>";
  echo "비밀번호  <input type=text value=$pw><br>";
  echo "</body></html>";
 ?>
