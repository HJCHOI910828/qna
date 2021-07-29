<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<?
		$f_no=$_GET["f_no"];
	?>
	<br><br>
	<form name = "frm1" method = "post" action = "qna_write_re_ok.php">
	<table class = "table1">
		<tr>
			<td>글쓴이</td>
			<td><input type = "text" name = "writer"></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><input type = "text" name = "title"></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td>
				<textarea name = "content" rows = "10" cols = "75"></textarea>
				<input type = "hidden" name = "f_no" value = "<?="$f_no"?>">
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
				<input type = "button" value = "작성완료" onclick = "send()">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<script>
	function send(){
		document.frm1.submit();
	}
</script>