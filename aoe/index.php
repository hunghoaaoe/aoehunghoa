<?php
	include 'modules/config.php';
	include 'modules/header.php';
?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			      <div class="item active">
			        <img src="image/wall-slide.png" alt="" style="width:100%;height: 400px">
			        <div class="carousel-caption">
			          <h3>Some News</h3>
			          <p >Việt Nam Vô Địch! Việt Nam Vô Địch!!!</p>
			        </div>
			      </div>

			      <div class="item">
			        <img src="image/VNVD1.jpg" alt="Chicago" style="width:100%;height: 400px">
			        <div class="carousel-caption">
			          <h3>Some News</h3>
			          <h1 style="color: yellow">Việt Nam Vô Địch! Việt Nam Vô Địch!!!</h1>
			        </div>
			      </div>
			    
			      <div class="item">
			        <img src="image/wall-slide.png" alt="New York" style="width:100%;height: 400px">
			        <div class="carousel-caption">
			          <h3>Some News</h3>
			          <p>Việt Nam Vô Địch! Việt Nam Vô Địch!!!</p>
			        </div>
			      </div>
			  
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			 </div>

	 	</div>
		<div id="main">
			<div class="row">
				<div class="col-sm-8">
					<div>
						<h3>Tin AOE</h3>
						<i>"thực ra  là toàn bộ video"</i>
						<hr>
						<div class="news">
							
								<?php
									// Lấy tất cả bài viết mới nhất đã được phép public ra ngoài từ bảng video
									$sql = "select * from video order by thoigian";
									// Thực hiện truy vấn data thông qua hàm mysqli_query
									$query = mysqli_query($conn,$sql);
								?>
									<?php
										
										// Lặp dữ liệu lấy data từ cơ sở dữ liệu
										while ( $data = mysqli_fetch_array($query) ) {
									?>
									<p>
									<a href="display.php?id=<?php echo $data["id"];?>">[Video Clip]<?php echo ($data["tieude"])?></a></p>
									<?php
											
										}
									?>
								
							
					    </div>
					</div>
					<div>
						<?php
							// Lấy 3 bài viết mới nhất đã được phép public ra ngoài từ bảng video
							$sql = "select * from video order by thoigian desc limit 3";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<h3>Video Mới</h3>
						<hr>
						<div class="row">
							<?php
								
								// Lặp dữ liệu lấy data từ cơ sở dữ liệu
								while ( $data = mysqli_fetch_array($query) ) {
							?>
								<div class="col-sm-4">
									<iframe width="100%" height="250" src="<?php echo $data["link"];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<p><?php echo substr($data["tieude"], 0, 30)." ...";?><br> <?php echo $data["thoigian"]; ?></p>
									<h4><a href="display.php?id=<?php echo $data["id"];?>"> Xem thêm ></a></h4>
								</div>
							<?php
									
								}
							?>
						</div>
					</div>
					<div>
						<?php
							// Lấy 3 bài viết mới nhất đã được phép public ra ngoài từ bảng video
							$sql = "select * from video where nguoichoi = 'chimsedinang' order by thoigian desc limit 3";
							// Thực hiện truy vấn data thông qua hàm mysqli_query
							$query = mysqli_query($conn,$sql);
						?>
						<h3>Highlights of Chim Sẻ</h3>
						<hr>
						<div class="row">
							<?php
								
								// Lặp dữ liệu lấy data từ cơ sở dữ liệu
								while ( $data = mysqli_fetch_array($query) ) {
							?>
								<div class="col-sm-4">
									<iframe width="100%" height="250" src="<?php echo $data["link"];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<p ><?php echo substr($data["tieude"], 0, 30)." ...";?></p>
									<h4><a href="display.php?id=<?php echo $data["id"];?>"> Xem thêm ></a></h4>
								</div>
							<?php
									
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div>
						<h3 style="padding: 5px"><i class="fas fa-trophy" style="padding-right: 20px"></i>Kết quả mùa giải</h3>
						<div><img src="image/tran1.png" alt="" width="100%"></div>
						<div><img src="image/tran2.png" alt="" width="100%"></div>
						<div><img src="image/tran3.png" alt="" width="100%"></div>
					</div>
					<h3><i class="fas fa-users"  style="padding-right: 20px;"></i>Top Game Thủ</h3>
						<hr>
					<div class="rank">
						<div><img src="image/rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/chimse-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/hong-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/cam-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/no-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/bi-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/chi-rank.png" alt="" width="100%"></div>
						<hr>
						<div><img src="image/truy-rank.png" alt="" width="100%"></div>
					</div>
				</div>
			</div>
		</div>

<?php include 'modules/footer.php' ?>











