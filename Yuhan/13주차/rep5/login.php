<?php
  include "connect.php";
  $query = "select * from b201907033 where id = '$khi_id'";
  $result = mysql_query($query);

  # 에러난 메세지를 출력하는 부분
  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit; # 프로그램 강제 종료
  }

  $row = mysql_fetch_array($result);

  if($row['id']!= $khi_id){
    echo "입력하신 아이디가 일치하지 않습니다.";
  }
  else {
    if ($row['pw']!= $khi_pw){
      echo "입력하신 패스워드가 일치하지 않습니다.";
    }
    else
    {
      setcookie("uid", "$khi_id", 0);
      setcookie("login", "1", 0);
      echo "$khi_id"."님 입장을 환영합니다.<p>";
    }
  }
  echo "<meta http-equiv='Refresh' content='3; URL=f2.php'>";
 ?>
