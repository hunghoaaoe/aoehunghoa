<?php
	  $tenmaychu='localhost';
	  $tentaikhoan='root';
	  $pass='';
	  $csdl='aoe';
	  $conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	  mysqli_query($conn,"SET NAMES 'UTF8'");
?>