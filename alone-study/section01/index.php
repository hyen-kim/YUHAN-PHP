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
  <pre>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
<pre>
</pre
  </body>
</html>
