<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="chitietsanpham.css" media="screen"/>
</head>
<body>
	<?php
    	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
		$con->set_charset("utf8");
		session_start();
		$idsp=$_REQUEST['idsp'];
		$sql="SELECT * FROM sanpham WHERE idsp=$idsp";
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()){
		    echo "<h2>Chi tiết sản phẩm</h2>";
			echo "<table align=center>";
			echo "<tr>
			<th rowspan=4><img src='".$row['hinhanhsp']."' width='250px'></th>
			</tr>";
			echo "<tr>
			<th class='bang'>Tên sản phẩm</th> 
			<td class='bang'>".$row['tensp']."</td>
			</tr>";
			echo "<tr>
			<th class='bang'>Giá sản phẩm</th> 
			<td class='bang'>".$row['giasp']." VND</td>
			</tr>";
			echo "<tr id=chitiet>
			<th class='bang'>Chi tiết về sản phẩm</th> 
			<td rowspan=4 class='chitietsp'>".$row['chitietsp']."</td>
			</tr>";
			echo "</table>";
		}
		$con->close();	
	?>
</body>
</html>

