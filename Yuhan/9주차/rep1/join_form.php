<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2차 지필평가</title>
  </head>
  <body>
    <form method=post action=join.php>
    <table>
    <tr>
      <td>아이디 : </td>
      <td><input type="text" name="khi_id" size="20"> </td>
    </tr>
    <tr>
      <td>비밀번호 : </td>
      <td><input type="text" name="khi_pw" size="20"></td>
    </tr>
    <tr>
      <td>비번확인 : </td>
      <td><input type="text" name="khi_pwch" size="20"></td>
    </tr>
    <tr>
      <td>이름 : </td>
      <td><input type="text" name="khi_name" size="20"></td>
    </tr>
      <tr>
        <td>핸드폰 : </td>
        <td><select name = "khi_pho1">
          <option value="010">010</option>
          <option value="011">011</option>
          <option value="012">012</option>
          <option value="013">013</option>
          <option value="014">014</option>
          <option value="015">015</option>
      </select>
            - <input type="text" name="khi_pho2" size="8">
            - <input type="text" name="khi_pho3" size="8"></td>
        </tr>
      <tr>
        <td>우편번호 : </td>
        <td><input type="text" name="khi_zipcode" size="20"></td>
      </tr>
      <tr>
        <td>성별 : </td>
        <td><input type="radio" name="khi_sex" value="M"> 남자
            <input type="radio" name="khi_sex" value="F"> 여자 </td>
      </tr>
    </table>
    <input type="submit" value="회원가입">
  </form>
  </body>
</html>
