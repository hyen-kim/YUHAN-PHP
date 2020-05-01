<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  # php 프로그램과 DB가 연동되는 부분
  mysql_connect("localhost", "user2020", "php");  # 연결할 DB의 host, id, pw
  mysql_select_db("CSE2020"); # 우리가 사용가능한 DB

  # sql 문장
  $query = "INSERT INTO a201907033 (id, sex, hp_type, hp_no, year, point)
            VALUES('test07', 'F', 'KT', '010-2222-2222', '2100', 800)";
            # point는 int형태

  # query가 실행가능한지 값 반환
  $result = mysql_query($query);

  # error 가 발생했는지 확인하는 조건문
  if (!$result) {
    echo mysql_error();
    exit;
  }

  echo "insert 완료";
 ?>
