<?php include "modules/header.php" ?>
<?php
session_start();
?>
<?php
	//Gọi file config.php để kết nối dl
require_once("modules/config.php");
	// khi ấn nút đăng nhập
if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
	$taikhoan = $_POST["taikhoan"];
	$matkhau = $_POST["matkhau"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$taikhoan = strip_tags($taikhoan);
	$taikhoan = addslashes($taikhoan);
	$matkhau = strip_tags($matkhau);
	$matkhau = addslashes($matkhau);
	if ($taikhoan == "" || $matkhau =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		if (mysqli_num_rows(mysqli_query($conn,"select * from developer where taikhoan = '$taikhoan' and matkhau = '$matkhau' "))==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}elseif (mysqli_query($conn,"select trangthai from developer where taikhoan = '$taikhoan' ")=="0") {
			echo "chua kich hoat";
		}
		else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($conn,"select * from developer where taikhoan = '$taikhoan' and matkhau = '$matkhau' ") ) {
				$_SESSION['taikhoan'] = $data["taikhoan"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["hoten"] = $data["hoten"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // chuyển hướng tới trang quản lý
			header('Location: index.php');
		}
	}
}
?>
<div style="min-height: 350px">
	<form method="POST" action="dangnhap.php" style="width: 400px;text-align: center;margin:auto;">
		<fieldset>
		    <legend>Đăng nhập</legend>
		    	<table>
		    		<tr>
		    			<td>Username</td>
		    			<td><input type="text" name="taikhoan" size="30"></td>
		    		</tr>
		    		<tr>
		    			<td>Password</td>
		    			<td><input type="password" name="matkhau" size="30"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
		    		</tr>
		    	</table>
	  	</fieldset>
  	</form>
  	<div style="text-align: center">
  		<h4>* Việc <span style="color: red">Đăng Nhập</span> sẽ đưa bạn tới trang quản lý, chỉ áp dụng cho người quản lý!</h4>
  		<h4>* Nếu bạn muốn trở thành người phát triển trang web này hãy <span style="text-decoration: underline;"><a href="dangky.php">Đăng Ký</a></span></h4>
  	</div>

</div>
<?php include "modules/footer.php" ?>