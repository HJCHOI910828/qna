<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<?
		$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
		$query="select * from qna order by f_no desc, no asc";
		$rs = mysqli_query($conn,$query);
	?>
	<br><br>
	<table class = "table1">
		<tr>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<? while($row=mysqli_fetch_array($rs)){ ?>
		<tr>
			<td>
			<? 
				if($row["step"]==1){
					echo "&nbsp;&nbsp;&nbsp;┗";
				}
			?>
				<a href = "qna_content.php?no=<?=$row["no"]?>"><?=$row["title"]?></a>
			</td>
			<td><?=$row["writer"]?></td>
			<td><?=$row["writeday"]?></td>
			<td><?=$row["hit"]?></td>
		</tr>
		<? } ?>
		<tr>
			<td colspan = "4" align = "center">
				<input type="button" value="질문하기" onclick="location.href='qna_write.php'">
			</td>
		</tr>
	</table>
</body>
</html>