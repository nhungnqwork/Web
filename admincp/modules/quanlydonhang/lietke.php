<p>List of orders</p>
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Code</th>
    <th>Name of customer</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Status</th>
  	<th>Management</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">New Orders</a>';
    	}else{
    		echo 'Seen';
    	}
    	?>
    </td>
   	<td>
   		<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">View Orders</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>