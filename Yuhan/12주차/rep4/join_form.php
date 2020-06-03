<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>rep4</title>
    <script lang="javascript">
    function check_form(){
      // 아이디 첫글자 확인
      var idval = document.joinform.khi_id.value ;
      if(idval.charAt(0) < 'A' || idval.charAt(0) > 'z'){
        alert("아이디의 첫글자는 영문자입니다.");
        document.joinform.khi_id.focus();
        return;
      }

      // 비밀번호에 빈값 확인
      if(document.joinform.khi_pw.value == ""){
        alert("비밀번호를 입력하세요.");
        document.joinform.pw.focus();
        return;
      }

      // 비밀번호와 비밀번호 확인 값 확인
      if(document.joinform.khi_pw.value != document.joinform.khi_pwch.value){
        alert("비밀번호가 일치하지 않습니다.");
        document.joinform.pw.focus();
        return;
      }

    document.joinform.submit();
  }

  // 핸드폰 체크
  function check_pho(){
    var phovar = document.joinform.khi_pho1.value + "-" +
                  document.joinform.khi_pho2.value + "-" + document.joinform.khi_pho3.value;

    phoresult = "pho_check.php?pho=" + phovar;
    window.open(phoresult, "phocheck", 'width=300, height=200, status=no'); // 창을 띄운다.
    //                      창의 이름    창의 크기
  }
  </script>

  </head>
  <body>
    <form method=post action=join.php name=joinform>
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
            - <input type="text" name="khi_pho2" size="4">
            - <input type="text" name="khi_pho3" size="4">
            <input type=button value="핸드폰체크" onclick="check_pho()">
          </td>
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
    <input type=button value="회원가입" onclick="check_form()">
  </form>
  </body>
</html>
