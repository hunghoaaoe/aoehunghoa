<?php
	  $tenmaychu='localhost';
	  $tentaikhoan='root';
	  $pass='';
	  $csdl='aoe';
	  $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	  mysqli_query($conn,"SET NAMES 'UTF8'");
?>
<?php 
	if (isset($_GET["id_deact"])) {
		$id_deact = $_GET['id_deact'];
		$sql = "UPDATE developer SET trangthai = '0' WHERE trangthai = '1' and taikhoan = '$id_deact'" ;
		mysqli_query($conn,$sql);
	}
?>
<p>Hủy Kích Hoạt Thành Công!</p>