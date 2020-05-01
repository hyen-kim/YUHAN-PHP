<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<?php
  $conn = mysql_connect("localhost", "user2020","php");
  # localhost : 내 기기 자체를 뜻함
  # user2020 : DB 사용자 ID
  # php : 비밀번호
  # 위에 연결이 성공된다면 true 결과를 반환

  if(! $conn){  # 연결을 시도했는데 리턴값이 거짓이라면
    # id,pw가 다르다거나, DB서버가 죽어있으면 연결이 되지 않음
      echo "MySQL 서버 접속에 실패했습니다.";
      exit; # 프로그램 강제 종료
    }

    echo "MySQL 서버 접속 성공 <br>";
    echo $conn;
    mysql_close($conn);

 ?>
