<?php
	  $tenmaychu='localhost';
	  $tentaikhoan='root';
	  $pass='';
	  $csdl='aoe';
	  $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	  mysqli_query($conn,"SET NAMES 'UTF8'");
?>
<?php 
	if (isset($_GET["id_act"])) {
		$id_act = $_GET['id_act'];
		$sql = "UPDATE developer SET trangthai = '1' WHERE trangthai = '0' and taikhoan = '$id_act'" ;
		mysqli_query($conn,$sql);
	}
?>
<p>Kích Hoạt Thành Công!</p>