<?
	$writer=$_POST["writer"];
	$title = $_POST["title"];
	$writeday = date("Y-m-d(h:i)");
	$content = $_POST["content"];
	$step = 0;//원글이므로 0이라는 플래그를 넣어준다
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$query="select ifnull(max(f_no),0)+1 as f_no from qna;";
	$rs = mysqli_query($conn,$query);
	$row =mysqli_fetch_array($rs);
	$f_no=$row["f_no"];

	$query = "insert into qna (writer, title, content,writeday, step, f_no) values ('$writer', '$title', '$content', '$writeday', $step, $f_no)";
	mysqli_query($conn,$query);
?>
<meta http-equiv = "refresh" content = "0;url=qna.php">