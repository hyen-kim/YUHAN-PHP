<?php
  if(! $login){ // 쿠키 값이 없을경우 guest
    echo("guest");
  }
  else {      // 쿠키 값이 있을경우 
    echo ("$uid");
  }
 ?>
