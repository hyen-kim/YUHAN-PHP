<?php
  include "connect.php";
  $query = "select * from b201907033 where pho = '$pho'";
  $result = mysql_query($query);

  # 에러난 메세지를 출력하는 부분
  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit; # 프로그램 강제 종료
  }

  $row = mysql_fetch_array($result);
  $r = mysql_num_rows($result);

  if($r) echo "$pho 는 <br>". $row['id']." 님이 등록했습니다.";
  else echo "$pho 는 등록 가능한 핸드폰 번호 입니다.";
?>

<html>
  <meta charset="utf-8">
<hr>
<input type=button onclick="self.close()" value="닫기">
</html>
