<?
	$writer=$_POST["writer"];
	$title = $_POST["title"];
	$writeday = date("Y-m-d(h:i)");
	$content = $_POST["content"];
	$step = 1;//답변이므로 1이라는 플래그를 넣어준다
	$f_no=$_POST["f_no"];
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$query="insert into qna(writer, title, content, writeday,step,f_no) values ('$writer', '$title', '$content','$writeday',$step, $f_no);";
	mysqli_query($conn,$query);
?>
<meta http-equiv = "refresh" content = "0;url=qna.php">