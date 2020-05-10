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


 ?>
