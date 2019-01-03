<div style="border:1px solid;background-color:#99c2ff;text-align: center;width: 200px;float: left;">< <a href="index.php" style="text-decoration: none; ">Quay về trang chủ</a></div>
<?php include "modules/config.php" ?>

<?php
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
		echo '<h3 style="color:red">Tài khoản hoặc mật khẩu bạn không được để trống!</h3>';
	}else{
		if (mysqli_num_rows(mysqli_query($conn,"select * from developer where taikhoan = '$taikhoan' and matkhau = '$matkhau' "))==0) {
			echo '<h3 style="color:red">Tên đăng nhập hoặc mật khẩu không đúng !</h3>';
		}else{
			if (mysqli_fetch_array(mysqli_query($conn,"select trangthai from developer where taikhoan='$taikhoan'"))['trangthai']=='0') {
				echo '<h3 style="color:red">Tài khoản chưa được kích hoạt !</h3>';
			}else{
				$sql="select * from developer where taikhoan = '$taikhoan'";
				$query=mysqli_query($conn,$sql);
				session_start();
				header('location:quanly.php');
				while ( $data = mysqli_fetch_array($query)) {
					$_SESSION['taikhoan'] = $data["taikhoan"];
					$_SESSION['matkhau'] = $data["matkhau"];
					$_SESSION["email"] = $data["email"];
					$_SESSION["hoten"] = $data["hoten"];
					$_SESSION['quyen'] = $data["quyen"];
					$_SESSION['avatar'] = $data["avatar"];
	    		}

				
			}
			
		}
	}
}
?>
<div style="min-height: 350px">
	<form method="POST" action="dangnhap.php" style="width: 400px;text-align: center;margin:auto;">
		<fieldset>
		    <legend>Đăng nhập</legend>
		    	<table style="margin:auto;">
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

