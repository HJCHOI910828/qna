<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<?
		$no = $_GET["no"];
		$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
		$query="update qna set hit=hit+1 where no=$no";
		mysqli_query($conn,$query);
		$query="select * from qna where no=$no";
		$rs = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($rs);
	?>
	<br><br>
	<form name = "frm1" method = "post" action = "qna_write_ok.php">
	<table class = "table1">
		<tr>
			<td>글쓴이</td>
			<td><?=$row["writer"]?></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><?=$row["title"]?></td>
		</tr>
		<tr>
			<td>조회수</td>
			<td><?=$row["hit"]?></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><?=nl2br($row["content"])?></textarea></td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
			<? if($row["step"]==0){ ?>
				<input type = "button" value = "답변하기" onclick = "send(<?=$row["f_no"]?>)">
			<? } ?>
				<input type = "button" value = "수정" onclick = "location.href='qna_edit.php?no=<?=$no?>'">
				<input type = "button" value = "삭제" onclick = "del(<?=$no?>)">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<script>
	function send(f_no){
		location.href="qna_write_re.php?f_no="+f_no;
	}
	function del(no){
		if(confirm("정말 삭제하시겠습니까?")){
		location.href="qna_del.php?no="+no;
		}
	}
</script>