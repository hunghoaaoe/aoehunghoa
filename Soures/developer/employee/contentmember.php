<div class="container-fluide">
	<div class="row">
		<div class="col-sm-2" style="border-right: 2px solid;height: auto">
			<?PHP
		         include('developer/employee/left.php');
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
				 if($quanly=='thembaiviet'){
						 include('developer/employee/thembaiviet.php');			 
				 }elseif ($quanly=='suabaiviet') {
				 	include('developer/employee/suabaiviet.php');		
				 }else
					include('developer/employee/thongtintaikhoan.php');			 
				 
		   ?>
		</div>
	</div>
</div>