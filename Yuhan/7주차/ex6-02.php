<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  $conn = mysql_connect("localhost", "user2020","php");

  if(! $conn){
      echo "MySQL 서버 접속에 실패했습니다.";
      exit; # 프로그램 강제 종료
    }

    $db = mysql_select_db("CSE2020"); # 내가 사용할 DB를 select하기 위한 명령
                                      # user2020은 CSE2020 DB만 사용 가능
    if (! $db) {
      echo "데이터베이스를 열수 없습니다.";
      exit;
    }
    # ------------------------------------------- 필수적으로 필요한 부분

    echo "connect success";
    mysql_close($conn);
 ?>
