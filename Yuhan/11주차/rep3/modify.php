<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php

  include "connect.php";  # 프로그램을 불러다가 사용할 수 있음

  $hp = $pho1."-".$pho2."-".$pho3;

  $query = "UPDATE b201907033 SET pw = '$pw', name = '$name', pho = '$hp', zipcode = '$zipcode', sex = '$sex'
            WHERE id = '$id'";

  $result = mysql_query($query);
  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit;
  }

  echo "회원정보가 변경되었습니다.";

 ?>
