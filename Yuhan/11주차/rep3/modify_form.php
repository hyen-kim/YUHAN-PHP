<meta charset="utf-8">  <!-- 한글깨짐 방지를 위해 -->
<html>
<body>

<?php
  include "connect.php";  # 프로그램을 불러다가 사용할 수 있음
  $query = "SELECT * FROM b201907033 WHERE id = '$id'";
  $result = mysql_query($query);
  if (! $result) {
    echo mysql_errno(). " : ". mysql_error(); # no : 번호 / or : 메시지
    exit;
  }

  $row = mysql_fetch_array($result);

?>

<form method=post action="modify.php?id=<?php echo $id?>">
  <table>
  <tr>
    <td> 아이디 : </td>
    <td><?php echo $id; ?> </td></tr>
  <tr>
    <td>비밀번호 :</td>
    <td> <input type=text name="pw" value="<?php echo $row["pw"];?>"> </td></tr>
    <tr>
      <td>비번확인 : </td>
      <td><input type="text" name="pwch" size="20"></td>
    </tr>
    <tr>
      <td>이름 : </td>
      <td><input type="text" name="name" size="20" value="<?php echo $row["name"];?>"></td>
    </tr>

    <!-- 헨드폰을 처리하는 부분  -->
      <tr>
        <td>핸드폰 : </td>
        <td>
          <select name = pho1>
          <?php
            $hp = explode("-", $row["pho"]);

            if($hp[0] == "010"){
              echo "<option value=\"010\" selected>010</option>";
              echo "<option value=\"011\">011</option>";
              echo "<option value=\"013\">013</option>";
              echo "<option value=\"014\">014</option>";
              echo "<option value=\"015\">015</option>";
            }
            if ($hp[0] == "011") {
              echo "<option value=\"010\" >010</option>";
              echo "<option value=\"011\" selected>011</option>";
              echo "<option value=\"013\">013</option>";
              echo "<option value=\"014\">014</option>";
              echo "<option value=\"015\">015</option>";
            }
            if ($hp[0] == "013") {
              echo "<option value=\"010\" >010</option>";
              echo "<option value=\"011\">011</option>";
              echo "<option value=\"013\" selected>013</option>";
              echo "<option value=\"014\">014</option>";
              echo "<option value=\"015\">015</option>";
            }
            if ($hp[0] == "014") {
              echo "<option value=\"010\" >010</option>";
              echo "<option value=\"011\">011</option>";
              echo "<option value=\"013\">013</option>";
              echo "<option value=\"014\" selected>014</option>";
              echo "<option value=\"015\">015</option>";
            }
            if ($hp[0] == "015") {
              echo "<option value=\"010\" >010</option>";
              echo "<option value=\"011\">011</option>";
              echo "<option value=\"013\">013</option>";
              echo "<option value=\"014\">014</option>";
              echo "<option value=\"015\" selected>015</option>";
            }
           ?>
      </select>
            - <input type="text" name="pho2" size="8" value=<?php echo $hp[1];?>>
            - <input type="text" name="pho3" size="8" value=<?php echo $hp[2];?>></td>
        </tr>
      <tr>
        <td>우편번호 : </td>
        <td><input type="text" name="zipcode" size="20" value=<?php echo $row["zipcode"];?>></td>
      </tr>

      <!-- 성별을 처리하는 부분  -->
      <tr>
        <td>성별 : </td>
        <td>
          <?php
          $sex = $row["sex"];
          if($sex == "M"){
            echo "<input type=radio name=sex value=\"M\" checked> 남자";
            echo "<input type=radio name=sex value=\"F\"> 여자";
          }
          else {
            echo "<input type=radio name=sex value=\"M\"> 남자";
            echo "<input type=radio name=sex value=\"F\" checked> 여자";
          }
          ?>
         </td>
      </tr>
    </table>
    <input type="submit" value="정보변경">
    <input type="reset" value="취소">
  </form>

</body>
</html>
