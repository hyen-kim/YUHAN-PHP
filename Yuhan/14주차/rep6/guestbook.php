<html>
<meta charset="utf-8">
  <body>
    <b>방명록</b> (<a href="guest_form.php">글쓰기</a>) <br> <br>
<?php
  include "connect.php";

  $num_per_page = 2;  // 한 페이지에 보여줄 글의 갯수

  if (empty($page)) {
    $page = 1;
  }

  ###### 방명록에 등록된 총 레코드 갯수
  $result = mysql_query("select count(*) from t201907033");
  $tot = mysql_result($result, 0, 0);

  ###### 전체 페이지 수 계산
  $tot_page = ceil($tot / $num_per_page);
  if ($tot) {
    echo ("총 서명 : $tot    ( $page / $tot_page  page)");
  }
  else {
    echo ("현재 방명록에 서명된 글이 없습니다.");
    exit;
  }

  ###### 현재 페이지에 출력할 내용을 검색
  $first = $num_per_page * ($page-1);
  $query = "select * from t201907033 order by uid desc limit $first,
              $num_per_page";
  $result = mysql_query($query);
  if(! $result){
    echo mysql_errno(). " : ";
    echo mysql_error();
    exit;
  }
  // 5장에서 공부했을 때 얘기했던 문자열 처리했던 내용
  while ($row = mysql_fetch_array($result)) {
    $name = $row["name"];
    $email = $row["email"];
    $time = date("Y/m/d H:i:s", $row["signdate"]);
    $comment = $row["comment"];
    $comment = htmlspecialchars($comment);
    $comment = nl2br($comment);
    $rip = $row["clienthost"];

    echo "
      <table border=1 width=700>
        <tr>
        <td>작성자 : $name ($email) </td>
        <td>$time</td>
        </tr>
        <tr>
        <td colspan=2>$comment</td>
        </tr>
        <tr>
        <td>modify delete</td>
        <td>$rip</td>
        </tr>
      </table><br>
    ";
  }

  ##### 페이지 링크 만들기
  for ($p = 1; $p <= $tot_page; $p++) {
    if ($page == $p) {
      echo "<b>[$p]</b> ";
    }
    else{
      echo "<a href=\"guestbook.php?page=$p\">$p</a>";
    }
  }

 ?>
 </body>
 </html>
