<?php require_once("modules/config.php"); ?>
<?php include "modules/header.php" ?>
<?php
	if (isset($_GET["id"])) {
		$id = $_GET['id'];//lấy giá trị id bài viết
	}
	// Lấy ra nội dung bài viết theo điều kiện id
	$sql = "select * from video where id = '$id' ";
	// Thực hiện truy vấn data thông qua hàm mysqli_query
	$query = mysqli_query($conn,$sql); 
 ?>
			<div class="innertube">
				<?php 
					while ( $data = mysqli_fetch_array($query) ) {
				?>
					<iframe width="800px" height="400px" src="<?php  echo $data['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<h2><?php echo $data['tieude']; ?></h3></div></br>
					<i> Ngày Đăng : <?php echo $data['thoigian']; ?></i><br>
					<p>Lượt xem: </p>
					<h3>BÌNH LUẬN & CHÉM GIÓ</h2><hr>
					<!--hiển thị comment-->
					<div class="fb-comments" data-href="http://localhost/aoe/display.php?id=<?php echo "$id"; ?>" data-numposts="10" ></div>
					<script>
						  window.fbAsyncInit = function() {
						    FB.init({
						      appId      : '1142619819248938',
						      xfbml      : true,
						      version    : 'v3.2'
						    });
						    FB.AppEvents.logPageView();
						  };

						  (function(d, s, id){
						     var js, fjs = d.getElementsByTagName(s)[0];
						     if (d.getElementById(id)) {return;}
						     js = d.createElement(s); js.id = id;
						     js.src = "https://connect.facebook.net/en_US/sdk.js";
						     fjs.parentNode.insertBefore(js, fjs);
						   }(document, 'script', 'facebook-jssdk'));
						</script>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1142619819248938&autoLogAppEvents=1';
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
				<?php } ?>
			</div>
		</main>
<?php include "modules/footer.php" ?>