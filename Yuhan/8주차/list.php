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

  $query = "select * from a201907033 order by id";
  $result = mysql_query($query); # DB에게 전달

  if(! $result){
    echo mysql_errno(). " : " . mysql_error();
  }

  $r = mysql_num_rows($result); // 전체 긁어온 데이터 건수 (몇줄)

  if(!$r){ // 현재 등록된 사용자가 없을 경우
    echo "현재 등록된 사용자가 없습니다.";
    exit;
  }

 ?>
<table border=1>
<tr>
  <td>현재 <?php echo("$r")?> 명의 사용자가 등룍되어 있습니다.</td>
</tr>
<tr>
  <th>아이디</th>
  <th>성별</th>
  <th>통신사</th>
  <th>핸드폰번호</th>
  <th>년도</th>
  <th>포인트</th>
</tr>
  <?php
    while ($row = mysql_fetch_array($result)) {
      echo "<tr> <td> $row[id]</td>
                 <td> $row[sex]</td>
                 <td> $row[hp_type]</td>
                 <td> $row[hp_no]</td>
                 <td> $row[year]</td>
                 <td> $row[point]</td>
      </tr>";
    }
  ?>
</table>
