<p>	Add product</p>
<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td>Name of product</td>
	  	<td><input type="text" name="tensanpham"></td>
	  </tr>
	   <tr>
	  	<td>Code</td>
	  	<td><input type="text" name="masp"></td>
	  </tr>
	  <tr>
	  	<td>Price</td>
	  	<td><input type="text" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td>Amount</td>
	  	<td><input type="text" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td>Image</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>
	  <tr>
	  	<td>Sumary</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
	  </tr>
	   <tr>
	  	<td>Content</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
	  </tr>
	  <tr>
	    <td>Category of products</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	    <td>Status</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">activated</option>
	    		<option value="0">hide</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themsanpham" value="Add product"></td>
	  </tr>
 </form>
</table>