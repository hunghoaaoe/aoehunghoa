<?php 
	if (isset($_POST["them"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$tieude = $_POST["tieude"];
		$link = $_POST["link"];
		$nguoichoi = $_POST["nguoichoi"];
		$id = $_POST["id"];
		$theloai = $_POST["theloai"];
		if ($tieude == "" || $link  == "" || $nguoichoi== "" || $id== "" ||$theloai == "" ) {
			echo "Vui lòng điền đầy đủ thông tin bài viết!";
		}elseif (mysqli_fetch_array(mysqli_query($conn,"select id from video where id='$id'"))['id']>0) {
			mysqli_query($conn,"UPDATE video SET  tieude = '$tieude', nguoichoi = '$nguoichoi', thoigian = now(), link = '$link',theloai = '$theloai' ");
			echo "Sửa bài viết thành công!";
		} else {
			echo "Sửa Không Thành Công!";
		}
		
		
	}
 ?>
<div>
	<h2>Sửa Thông Tin Bài Viết</h2>
	<form action="quanly.php?quanly=suabaiviet" method="post">
		<table>	
			<tr>
				<td nowrap="nowrap">Tiêu Đề:</td>
				<td><textarea name="tieude" id="tieude" rows="10" cols="150" ></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Link:
				</td>
				<td><input type="text" id="link" name="link" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Người Chơi: 
				</td>
				<td><input type="text" id="nguoichoi" name="nguoichoi"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">ID: 
				</td>
				<td><input type="text" id="id" name="id"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Thể Loại: 
				</td>
				<td><input type="text" id="theloai" name="theloai"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="them" value="Gửi yêu cầu"></td>
			</tr>

		</table>
		
	</form>
</div>