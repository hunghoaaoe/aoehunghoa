</div>
</div>
<div class="container-fluide">
<div class="footer">
			<div class="row">
				<div class="col-sm-4" style="padding-left: 40px;">
					<h3 >GAME THỦ NỔI BẬT</h3>
					<p >
						<?php
											
							$sql = "select * from video where nguoichoi = 'chimsedinang'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
												
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						 $data = mysqli_fetch_array($query)  
						?>
						<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>"> Chim Sẻ Đi Nắng </a>
					</p>
					<p >
						<?php
							
							$sql = "select * from video where nguoichoi = 'honganh'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
												
							// Lặp dữ liệu lấy data từ cơ sở dữ liệu
							$data = mysqli_fetch_array($query)  
						?>
						<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>">Hồng Anh </a>
					</p>
					<p >
						<?php
						
							$sql = "select * from video where nguoichoi = 'bibi'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
												
							// Lặp dữ liệu lấy data từ cơ sở dữ liệu
							$data = mysqli_fetch_array($query)  
						?>
						<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>">BiBi</a>
					</p>
				</div>
				<div class="col-sm-4">

					<h3 class="csmin">THỂ LOẠI &amp; CLAN</h3>

					<p class="">
						<?php
							$sql = "select * from video where theloai = 'solo'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
							// Lặp dữ liệu lấy data từ cơ sở dữ liệu
							$data = mysqli_fetch_array($query)  
						?>
						<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">Solo</a>
						 • <?php
							$sql = "select * from video where theloai = '2vs2'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
							// Lặp dữ liệu lấy data từ cơ sở dữ liệu
							$data = mysqli_fetch_array($query)  
						?>
						<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">2vs2</a> 
						 • <?php
							$sql = "select * from video where theloai = '3vs3'";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<?php
							// Lặp dữ liệu lấy data từ cơ sở dữ liệu
							$data = mysqli_fetch_array($query)  
						?>
						<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">3vs3</a> 
					</p>

					<p class=""><a href="">GameTV</a> • <a href="">BiBi Club</a> • <a href="">Thái Bình</a></p>

				</div>
				
				<div class="col-sm-4">
					<h3 >LIÊN HỆ ADMIN</h3>
					<p ><i class="fas fa-envelope" style="margin-right: 5px"></i>Email: <b>hunghv62@wru.vn</b></p>
					<p ><i class="fas fa-users" style="margin-right: 5px"></i>Designed by <b>hung_hoa aoe team</b></p>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
	</div>
	
	


</body>
</html>

	