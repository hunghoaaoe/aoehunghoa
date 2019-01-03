<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--link icon-->
	<link rel="shortcut icon" type="image/png" href="image/favicon.jpg"/>
	<meta charset="utf-8">
	<title>AOE TV - Xem Các Trận AOE Đỉnh Cao </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<?php include "modules/config.php" ?>
	<div class="container-fluide" style="padding-left: 0px;padding-right: 0px;">
		<div id="header">
			<div class="row">
				<div class="col-sm-8">
					<a href="index.php" title=""><img src="image/logo.jpg" class="imglogo" width="100" height="100" alt="logo" style="margin-left: 50px;"></a>
				</div>
				<div class="col-sm-4" style="padding-right: 50px;">
					<div style="width:100%;height:50px"><button style="background-color:#ffff00;color:red;float:right;margin-top: 10px;border-radius: 10px"><a href="dangnhap.php">Đăng Nhập</a> </button></div>
					<div class="search-box"> 
					    <form class="search-form" action="timkiem.php?search=<?php echo '$search';?>" method="get">
					    	<input class="form-control" placeholder="Search..." type="text" name="search"> 
					    	<button class="btn btn-link search-btn" type="submit" name="submit" > <i class="glyphicon glyphicon-search"></i> 
					    	</button>
					    	<?php 
					    		if (isset($_GET['submit'])){
					    			$search = $_GET['search'];
					    			if (empty($search)) {
										header('location:index.php');;
									}
					    		}
					    	 ?>
					    </form> 
				   	</div> 
				</div>
			</div>
		</div>
		<div class="menu">
			<nav class="navbar navbar-default " role="navigation">
			    <div class="container">
			        <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">menu mobile</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand" href="">Cộng Đồng AOE</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
			            <ul class="nav navbar-nav">
			                <li><a href="index.php">TRANG CHỦ</a></li>
			                 <li class="dropdown">
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">GAME THỦ<span class="caret"></span></a>
			                    <ul class="dropdown-menu" role="menu">
			                        <li>
			                        	<?php
											
											$sql = "select * from video where nguoichoi = 'chimsedinang'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query); 
										?>
											<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>"> Chim Sẻ Đi Nắng </a>
												
										
			                        </li>
			                        <li>
			                        	<?php
											// Lấy 3 bài viết mới nhất đã được phép public ra ngoài từ bảng video
											$sql = "select * from video where nguoichoi = 'bibi'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query); 
										?>
											<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>">BiBi</a>
												
										
			                        </li>
			                        <li>
			                        	<?php
											// Lấy 3 bài viết mới nhất đã được phép public ra ngoài từ bảng video
											$sql = "select * from video where nguoichoi = 'honganh'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
												
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query); 
										?>
											<a href="nguoichoi.php?nguoichoi=<?php echo $data["nguoichoi"];?>">Hồng Anh </a>
												
										
			                        </li>
			                    </ul>
			                </li>
			                <li class="dropdown">
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">THỂ LOẠI<span class="caret"></span></a>
			                    <ul class="dropdown-menu" role="menu">
			                        <li>
			                        	<?php
											
											$sql = "select * from video where theloai = 'solo'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query);  
										?>
										<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">Solo</a>
									</li>
			                        <li>
			                        	<?php
											
											$sql = "select * from video where theloai = '2vs2'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
												
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query);  
										?>
										<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">2vs2</a>
									</li>
			                        <li>
			                        	<?php
											
											$sql = "select * from video where theloai = '3vs3'";
											// Thực hiện truy vấn data thông qua hàm mysqli_query
											$query = mysqli_query($conn,$sql);
										
												
											// Lặp dữ liệu lấy data từ cơ sở dữ liệu
											 $data = mysqli_fetch_array($query);	  
										?>
										<a href="theloai.php?theloai=<?php echo $data["theloai"];?>">3vs3</a>
									</li>
			                    </ul>
			                </li>
			                <li><a href="download.php">DOWLOAD</a></li>
			                <li><a href="tips.php">GUIDE</a></li>  
			            </ul>
			        </div>
			    </div>
			</nav>
	 	</div>
	</div>
	<div class="container">
	 	<div>
	 	<div class="container">