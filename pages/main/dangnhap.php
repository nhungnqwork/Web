<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Password or Email is wrong, please re-enter.</p>';
			
		}
	} 
?>
<br><br>
<form action="" autocomplete="off" method="POST">
		<table border="1" width="50%" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>User Login</h3></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" size="50" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" size="50" name="password" placeholder="Password..."></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Login"></td>
			</tr>
	</table>
	</form>