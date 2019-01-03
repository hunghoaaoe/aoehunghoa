<?php require_once("modules/config.php"); ?>
<?php include "modules/header.php" ?>
<?php
		$search = $_GET['search'];
		$sql = "SELECT * FROM `video` WHERE tieude REGEXP '$search'";
		$query = mysqli_query($conn,$sql);
		// Đếm số kq trả về trong sql.
		$num = mysqli_num_rows($query);
		// Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả

		if ($num > 0){
			echo "<h3>Hiển thị $num kết quả phù hợp với từ khóa <b>$search</b>:</h3>";
?>
		<div>
				<?php 
					while ( $data = mysqli_fetch_array($query) ) {
				?>
					<iframe width="800px" height="400px" src="<?php  echo $data['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a href="display.php?id=<?php echo $data["id"];?>"><h2><?php echo $data['tieude']; ?></h3></div></br></a></br>
					<i> Ngày Đăng : <?php echo $data['thoigian']; ?></i><br>
					<p>Lượt xem:<?php echo $data['luotxem']; ?> </p>
				<?php } ?>
		</div>
<?php
		}else{
			echo "Không có kết quả phù hợp với từ khóa này !";
		}
?>
</div>  
<?php include "modules/footer.php" ?>