<?php
  $conn = mysql_connect("localhost", "user2020", "php");
  if(! $conn) {
    echo "MySQL 서버 접속에 실패했습니다.";
    exit;
  }
  # 우리가 사용하는 DB명
  $db = mysql_select_db("CSE2020");
  if(! $db){
    echo "데이터베이스를 열 수 없습니다.";
    exit;
  }
  ?>
