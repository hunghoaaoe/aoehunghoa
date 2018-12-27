<?php include "modules/header.php" ?>
<?php require_once("modules/config.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form
		$taikhoan = $_POST["taikhoan"];
		$matkhau = $_POST["matkhau"];
		$email = $_POST["email"];
		$hoten = $_POST["hoten"];
		$diachi = $_POST["diachi"];
		//Kiểm tra điều kiện các field không được bỏ trống
		if ($taikhoan == "" || $matkhau == "" || $hoten == "" || $email == "" || $diachi == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin!";
		}
		else{
			$sql = "INSERT INTO developer(taikhoan, matkhau, email,diachi,hoten) VALUES ( '$taikhoan','$matkhau','email','$diachi','$hoten')";
			// thực thi câu $sql với biến conn lấy từ file config.php
			mysqli_query($conn,$sql);
			echo "Chúng Tôi Sẽ Liên Hệ Với Bạn, Để Bạn Có Thể Trở Thành Quản Trị Viên";
		}
	}

?>
	<div style="min-height: 350px">
		<form action="dangky.php" method="post" style="width: 400px;text-align: center;margin:auto;">
			<table>
				<tr>
					<td colspan="2"><h3>Đăng Ký</h3></td>
				</tr>
				<tr>
					<td colspan="2"><h5 style="color: red">Vui lòng điền toàn bộ thông tin vào ô trống!</h5></td>
				</tr>	
				<tr>
					<td>Tên Tài Khoản :</td>
					<td><input type="text" id="taikhoan" name="taikhoan"></td>
				</tr>
				<tr>
					<td>Mật khẩu :</td>
					<td><input type="password" id="matkhau" name="matkhau"></td>
				</tr>
				<tr>
					<td>Họ Tên :</td>
					<td><input type="text" id="hoten" name="hoten"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" id="email" name="email"></td>
				</tr>
				<tr>
					<td>Địa Chỉ :</td>
					<td><input type="text" id="diachi" name="diachi"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng Ký"></td>
				</tr>

			</table>
			
		</form>
	</div>
<?php include "modules/footer.php" ?>