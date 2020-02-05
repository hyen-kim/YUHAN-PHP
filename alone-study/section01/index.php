<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <!-- URL에 ?id=___ 을 넣으면 밑에 <h2> 태그에서 그 값이 출력 됨.-->
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
  </ol>

  <h2>
    <?php
      echo $_GET[id];
     ?>
  </h2>
  <?php
    echo file_get_contents("data/".$_GET[id]);
   ?>
  </body>
</html>
