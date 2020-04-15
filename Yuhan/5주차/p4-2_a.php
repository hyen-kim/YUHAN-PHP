<html>
  <head>
    <meta charset="utf-8">
    <title>실습 p4-2.php</title>
  </head>
  <body>
    <form method="post" action="p4-2_a.php">

      <table border=1 width=600>
      <tr><td align=center><?php echo $subject ?></td></tr>
      <tr><td>글쓴이 : <?php echo $name ?> </td></tr>
      <tr><td>올린시간 : <?php $now = time();
      $x = date("Y년 m월 d일 H : i : s", $now);
      echo $x ;?> </td></tr>
      <tr><td><?php $c = htmlspecialchars($comment);  # 태그들을 다 문자로 취급
        $c = nl2br($c); # 엔터키 취급 -> <br> 태그로 변경
        echo $c;
        ?></td></tr>
      <tr><td align=right><?php $rip = getenv("REMOTE_ADDR"); echo "$rip"; ?></td></tr>
    </form>
  </body>
</html>
