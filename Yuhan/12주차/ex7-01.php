<!DOCTYPE html>
<html>
  <head>
    <script lang="javascript">
    function check_form(){
      var idval = document.regform.id.value;
      if(idval.charAt(0) < 'A' || idval.charAt(0) > 'z') {
        alert("아이디의 첫글자는 영문자입니다.");
        document.regform.id.focus();
        return;
      }
      document.regform.submit();
    }
    </script>

  </head>
  <body>
    <form name = regform method=post action="process.php">
      아이디 : <input type=text name=id>
      <p>
        <input type=button value="확인" onclick="check_form()">
    </form>
  </body>
</html>
