<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2차 지필평가</title>
  </head>
  <body>
    <table>
    <tr>
      <td>아이디 : </td>
      <td><input type="text" name="id_hi" size="20"> </td>
    </tr>
    <tr>
      <td>비밀번호 : </td>
      <td><input type="text" name="pw_hi" size="20"></td>
    </tr>
    <tr>
      <td>이름 : </td>
      <td><input type="text" name="name_hi" size="20"></td>
    </tr>
      <tr>
        <td>핸드폰 : </td>
        <td><select name = "pho1_hi">
          <option value="">010</option>
          <?php
          $j = "01";
          for ($i=1; $i <= 9 ; $i++) {
            echo "<option value=$i>$j$i</option>"; }?></select>
            - <input type="text" name="pho2_hi" size="8">
            - <input type="text" name="pho3_hi" size="8"></td>
        </tr>
      <tr>
        <td>우편번호 : </td>
        <td><input type="text" name="zipcode_hi" size="20"></td>
      </tr>
      <tr>
        <td>성별 : </td>
        <td><input type="radio" name="sex_hi"> 남자
            <input type="radio" name="sex_hi"> 여자 </td>
      </tr>
    </table>
    <input type="submit" value="회원가입">
  </body>
</html>
