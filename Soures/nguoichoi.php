<?php require_once("modules/config.php"); ?>
<?php include "modules/header.php" ?>
<?php
	if (isset($_GET["nguoichoi"])) {
		$nguoichoi = $_GET['nguoichoi'];
	}
	$sql = "select * from video where nguoichoi = '$nguoichoi' ";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql); 
 ?>
			<div >
				<?php 
					while ( $data = mysqli_fetch_array($query) ) {
				?>
					<iframe width="800px" height="400px" src="<?php  echo $data['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<a href="display.php?id=<?php echo $data["id"];?>"><h2><?php echo $data['tieude']; ?></h3></br></a>
					<i> Ngày Đăng : <?php echo $data['thoigian']; ?></i><br>
					<p>Lượt xem:<?php echo $data['luotxem']; ?> </p>
					
				<?php } ?>
			
		</main>
<?php include "modules/footer.php" ?>