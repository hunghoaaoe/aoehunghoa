<?php 
	if (isset($_POST["them"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$tieude = $_POST["tieude"];
		$link = $_POST["link"];
		$nguoichoi = $_POST["nguoichoi"];
		$id = $_POST["id"];
		$theloai = $_POST["theloai"];
		$sql = "INSERT INTO video(id, tieude, luotxem, nguoichoi, thoigian, link,theloai ) VALUES ( '$id', '$tieude', '', '$nguoichoi', now(),'$link','$theloai')";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}
 ?>
<div>
	<h2>Thêm Bài Viết</h2>
	<form action="quanly.php?quanly=thembaiviet" method="post">
		<table>	
			<tr>
				<td nowrap="nowrap">Tiêu Đề:</td>
				<td><textarea name="tieude" id="tieude" rows="10" cols="150"></textarea></td>
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
				<td colspan="2" align="center"><input type="submit" name="them" value="Thêm bài viết"></td>
			</tr>

		</table>
		
	</form>
</div>