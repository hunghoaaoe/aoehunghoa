<div class="container-fluide">
	<div class="row">
		<div class="col-sm-2" style="border-right: 2px solid;height: auto">
			<?PHP
		         include('developer/admin/left.php');
		   ?>
		</div>
		<div class="col-sm-10">
			<?PHP
		         if(isset($_GET['quanly'])){
					 $quanly=$_GET['quanly'];
				 }else{
				     $quanly='';
				 }
			?>
			<?php
				 if($quanly=='nhanvien'){
						 include('developer/admin/nhanvien.php');			 
				 }elseif($quanly=='thembaiviet'){
						 include('developer/admin/thembaiviet.php');
				 }elseif ($quanly=='suabaiviet') {
				 	include('developer/admin/suabaiviet.php');		
				 }else
					include('developer/admin/thongtintaikhoan.php');			 
				 
		   ?>
		</div>
	</div>
</div>