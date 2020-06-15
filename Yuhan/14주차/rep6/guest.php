<?php
    include "connect.php";
    $signdate = time();
    $clienthost = getenv('REMOTE_ADDR');  // 서버 접속자 ip
    $query = "insert into t201907033 (name, email, comment, signdate, clienthost, pwd)
              values('$name', '$email', '$comment', '$signdate', '$clienthost', '$pwd')";

    $result = mysql_query($query);
    if (! $result) {
      echo mysql_errno(). " : ";
      echo mysql_error();
      exit;
    }

    echo "<meta http-equiv='Refresh' content='0; URL=guestbook.php'>";
    mysql_close($conn);

 ?>
