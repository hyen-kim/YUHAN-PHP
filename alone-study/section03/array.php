<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>


  <body>
    <!-- array -->
    <h1>Array</h1>

    <?php
    # 4개의 문자를 담고 있는 배열 0 1 2 3
    $test = array('yuhan', 'IT', 'soft', 'ware');
    # 배열 1번째와 세번째
    echo $test[1].'<br>';
    echo $test[3].'<br>';

    # int (4) : int 형 4개를 담고 있는 변수
    var_dump(count($test));
    echo '<br>';

    # 배열의 값을 추가 -> 끝에 추가
    array_push($test, 'Testyuhan');

    # 배열을 읽어옴
    var_dump($test);
    ?>
  </body>
</html>
