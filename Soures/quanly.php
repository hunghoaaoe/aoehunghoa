
<?php 
    session_start();
    if(isset($_SESSION['taikhoan']) && $_SESSION['quyen'] == 1){
		
?>

<div class="wrapper">
    <?php
	        include('modules/config.php');
			include('developer/admin/header.php');
			include('developer/admin/content.php');
			include('developer/admin/footer.php');

 ?>   
</div>
<?php
	}elseif(isset($_SESSION['taikhoan']) && $_SESSION['quyen'] == 0){
		?>
		      <div class="wrapper">
    <?php
	        include('modules/config.php');
			include('developer/employee/header.php');
			include('developer/employee/contentmember.php');
			include('developer/employee/footer.php');

 ?>   
</div>
<?php
	}else{
		header('location:dangnhap.php');
		}
	?>
</body>

</html>

