<?
	$no = $_POST["no"];
	$writer=$_POST["writer"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$rs = mysqli_query($conn,$query);

	$query = "update qna set writer = '$writer', title = '$title', content = '$content' where no=$no";
	mysqli_query($conn,$query);
?>
<meta http-equiv = "refresh" content = "0;url=qna.php">