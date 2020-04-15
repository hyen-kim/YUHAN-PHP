<?php
# htmlspecialchars() 함수의 예

  $str = "<b>bold</b>"; # <b> 태그 : 진하게
  echo "$str<br>";      # <b> 태그가 먹어서 진하게 됨
  echo "==============<br>";

  $str = htmlspecialchars("$str");  # <b>태그X -> 글자처럼 취급
  echo "$str";

 ?>
