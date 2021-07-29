<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<?
		$no=$_GET["no"];
		$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
		$query="select * from qna where no=$no ";
		$rs = mysqli_query($conn,$query);
		$row=mysqli_fetch_array($rs);
	?>
	<br><br>
	<form name = "frm1" method = "post" action = "qna_edit_ok.php">
	<table class = "table1">
		<tr>
			<td>글쓴이</td>
			<td><input type = "text" name = "writer" value = "<?=$row["writer"]?>"></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><input type = "text" name = "title" value = "<?=$row["title"]?>"></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><textarea name = "content" rows = "10" cols = "75"><?=$row["content"]?></textarea></td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
				<input type = "button" value = "수정" onclick = "send()">
				<input type = "hidden" name = "no" value = "<?=$no?>">
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