<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Password has been changed."</p>';
		}else{
			echo '<p style="color:red">Old account or password is incorrect, please re-enter."</p>';
		}
	} 
?>
<form action="" autocomplete="off" method="POST">
		<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Change password by Admin</h3></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Old password</td>
				<td><input type="text" name="password_cu"></td>
			</tr>
			<tr>
				<td>New password</td>
				<td><input type="text" name="password_moi"></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="doimatkhau" value="Change password"></td>
			</tr>
	</table>
	</form>