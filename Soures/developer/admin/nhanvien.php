<div>
	<h2>Quản Lý Tài Khoản Nhân Viên</h2>
	<hr>
	<?php
		// Lấy tất cả bài viết mới nhất đã được phép public ra ngoài từ bảng video
		$sql = "select * from developer where quyen = 0";
		// Thực hiện truy vấn data thông qua hàm mysqli_query
		$query = mysqli_query($conn,$sql);
	?>
	<?php
		// Lặp dữ liệu lấy data từ cơ sở dữ liệu
		while ( $data = mysqli_fetch_array($query) ) {
	?>
	<div class="row ">
		<div class="col-sm-6">
			<p>Họ Tên: </p>
			<p>Tên Tài Khoản: </p>
			<p>Mật Khẩu: </p>
			<p>Email: </p>
			<p>Trạng Thái:</p>
			<?php 
				if ($data['trangthai']=='0') {
			?>
				<button>
					<a href="developer/admin/active.php?id_act=<?php echo $data['taikhoan'] ?>">Kích Hoạt</a>
				</button>
			<?php
				}
			 ?>
			 <?php 
				if ($data['trangthai']=='1') {
			?>
				<button>
					<a href="developer/admin/deactive.php?id_deact=<?php echo $data['taikhoan'] ?>">Hủy Kích Hoạt</a>
				</button>
			<?php
				}
			 ?>
			<button><a href="developer/admin/xoa.php?id_del=<?php echo $data['taikhoan'] ?>">Xóa Nhân Viên Này</a></button>
			
		</div>
		<div class="col-sm-6">
			<p><?php echo $data["hoten"];?></p>
			<p><?php echo $data["taikhoan"];?></p>
			<p><?php echo $data["matkhau"];?></p>
			<p><?php echo $data["email"];?></p>
			<p><?php echo ($data['trangthai'] == 0) ? "Chưa Kích Hoạt" : "Đã Kích Hoạt"; ?></p>
		</div>
	</div>
	<hr>
	<?php
		}
	?>
</div>