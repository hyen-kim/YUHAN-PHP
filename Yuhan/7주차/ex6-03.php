<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  $conn = mysql_connect("localhost", "user2020","php");
  $db = mysql_select_db("CSE2020");

  if(! $conn){
        echo "MySQL 서버 접속에 실패했습니다.";
        exit; # 프로그램 강제 종료
  }
  if (! $db) {
    echo "데이터베이스를 열수 없습니다.";
    exit;
  }

# ----------------------------------------------

  $query = "select * from a201907033";  # a201907033 테이블의 내용을 가져옴
  $result = mysql_query($query);        # $query라는 문자열이 갖고 있는 내용을 db에게 전달
  # 변수를 왜 사용하는가 ? -> db의 결과를 저장하기 위해
  # $result는 db데이터의 시작점을 알고 있음 => 시작 위치만 알고 있음, 데이터 X
  # db에서 읽어온 내용을 $result로 찍히지 않음

  if(! $result){  # $result 값이 없다면
    # db에게 일을 시켰는데 에러가 발생하였다면 거짓반환
    echo mysql_error(); # mysql의 에러 메세지를 받아옴
    exit;
  }

  echo "MySQL 서버에 성공적으로 접속되었고 DB가 오픈되었습니다.<br>
  또한 SQL query가 전달되었습니다.<br>";

  echo $result;
  mysql_close($conn);
 ?>
