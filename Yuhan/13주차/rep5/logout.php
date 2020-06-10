<?php
  setcookie("login", "0", 0);
  setcookie("uid", "", time()-3600);

  echo "<meta http-equiv='Refresh' content='0; URL=f2.php'>";
 ?>
