<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Worker</title>
	<link rel="shortcut icon" type="image/png" href="image/favicon.jpg"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="developer/style.css">
</head>
<body>
	<header>
		<div>
			<div id="avatar"><img src="<?php echo $_SESSION["avatar"]?>" alt="" style="width: 100px;height: 100%"></div>
			<h3>Xin chào <b><font color="#FF0000"><?php echo $_SESSION["hoten"]?></font></b></h3>
		</div>
		<div><a href="logout.php">Đăng Xuất</a></div>
		<div><a href="quanly.php" >Trang chủ</a></div> 
	</header>