<?
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost", "root", "autoset", "mydb");
	$query = "delete from qna where no=$no";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content = "0;url=qna.php">