<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  # php 프로그램과 DB가 연동되는 부분
  $conn = mysql_connect("localhost", "user2020", "php");

  if(! $conn) {
    echo "MySQL 서버 접속에 실패했습니다.";
    exit;
  }

  $db = mysql_select_db("CSE2020");

  if(! $db){
    echo "데이터베이스를 열 수 없습니다.";
    exit;
  }

  $query = "INSERT INTO a201907033 (id, sex, hp_type, hp_no, year, point)
            VALUES('$id', '$sex', '$hp_type', '$hp_no', '$year', $point)";

  $result = mysql_query($query);

  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit;
  }

  echo "성공적으로 insert가 처리되었습니다.";
  mysql_close($conn);

 ?>
