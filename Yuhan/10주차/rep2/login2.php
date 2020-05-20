<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<html>
<body>
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

  $query1 = "SELECT * FROM b201907033 WHERE id = '$khi_id'";
  $query2 = "SELECT password('$khi_pw')";

  $result1 = mysql_query($query1);
  if (! $result1) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit;
  }

  $result2 = mysql_query($query2);
  if (! $result2) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit;
  }


  $row = mysql_fetch_array($result1);
  $row_pw = mysql_fetch_row($result2);

  if(! $row) {
    echo "$khi_id"." :존재하지 않는 ID입니다.";
    exit;
  }
  if($row_pw['pw']!= $row['pw']) {
    echo "비밀번호가 일치하지 않습니다.";
  }
  if ($row['pw'] != $khi_pw) {
    echo "비밀번호가 일치하지 않습니다.";
    exit;
  }

  echo $khi_id."님 입장을 환영합니다.<br>";

 ?>
  <a href="modify_from.php?id=<?php echo $khi_id ?>">[회원정보 변경]</a>
</body>
</html>
