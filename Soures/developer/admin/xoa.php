<?php
	  $tenmaychu='localhost';
	  $tentaikhoan='root';
	  $pass='';
	  $csdl='aoe';
	  $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	  mysqli_query($conn,"SET NAMES 'UTF8'");
?>
<?php 
	if (isset($_GET["id_del"])) {
		$id_del = $_GET['id_del'];
		$sql = "DELETE FROM developer WHERE taikhoan = '$id_del'";
		mysqli_query($conn,$sql);
	}
?>
<p>Xóa Thành Công!</p>