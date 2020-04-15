<?php
  $old = mktime(1,2,3,4,5,2000);
  echo date("Y년 m월 d일 h시 i분 s초 A", $old)."<br>";
  echo date("Y-m-d H:i:s"); /* 두 번째 인자 생략하면 현재시간 */
?>
