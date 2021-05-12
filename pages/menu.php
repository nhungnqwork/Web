<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php"><b>HOME</b></a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang"><i class="fa fa-shopping-cart "  aria-hidden="true"></i></a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
				<li><a href="index.php?quanly=thaydoimatkhau"><i class="fa fa-key" aria-hidden="true"></i></a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
				<?php
				} 
				?>
				

				<li><a href="index.php?quanly=tintuc"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></li>
<!-- 				<li><a href="index.php?quanly=lienhe"><i class="fa fa-phone-square" aria-hidden="true"></i></a></li>
 -->				
 				<li><a href="tel: +0583488870"><i class="fa fa-phone-square" aria-hidden="true"></i></a></li>
					
				
			</ul>
			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Search products..." name="tukhoa">
					<input type="submit" name="timkiem" value="Search">
				</form>
			</p>
		</div>