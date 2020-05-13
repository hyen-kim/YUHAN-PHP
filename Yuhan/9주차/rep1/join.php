<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  # php 프로그램과 DB가 연동되는 부분
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
  # 전화번호를 합치는부분 pho1, pho2, pho3
  $pho = $khi_pho1."-".$khi_pho2."-".$khi_pho3;

  # 데이터를 삽입하는 SQL
  $query = "INSERT INTO b201907033 (id, pw, name, pho, zipcode, sex)
            VALUES('$khi_id', '$khi_pw', '$khi_name', '$pho', '$khi_zipcode', '$khi_sex')";

  # DB에게 일을 부탁하는 부분
  $result = mysql_query($query);

  # 에러난 메세지를 출력하는 부분
  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit; # 프로그램 강제 종료
  }

  echo $khi_name."님 가입을 환영합니다.";
  mysql_close($conn);

 ?>
