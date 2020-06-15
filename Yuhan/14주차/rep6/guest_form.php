<html>
<head>
	<meta charset="utf-8">
	<title>guest</title>
</head>
<body>
<table>
<tr>
	<td bgcolor=skyblue colspan=2 align=center>방명록 글 올리기</td>
</tr>
<form name=guest_form method=post action="guest.php">
<tr>
	<td>이 름 </td>
	<td> 	<input type=text name=name size=40> </td>
</tr>
<tr>
	<td>이메일 </td>
	<td> 	<input type=text name=email size=40> </td>
</tr>
<tr>
	<td>내 용 </td>
	<td> 	<textarea name=comment rows=10 cols=50> </textarea> </td>
</tr>
<tr>
	<td>비밀번호 </td>
	<td> 	<input type=password name=pwd size=20> </td>
</tr>
<tr>
	<td colspan=2 align=center>
		<input type=submit value="글올리기" >
		<input type=reset value="취  소">
	</td>
</tr>
</form>
</table>
</body>
</html>
