<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="thongtin.css" media="screen"/>
</head>
<body>
	<?php
	    $con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
		$con->set_charset("utf8");
		session_start();
		if (!isset($_SESSION['id'])) {
        	 header('Location: dangnhap.html');
        }
		$id=$_SESSION['id'];
		$sql="SELECT * FROM thanhvien WHERE id=$id";
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<p>Chào bạn ".$row['tendangnhap']."!!!</p>";
			echo "<table align='center' class='bang'>";
			echo "<tr>
			<th colspan='2' class='ttcn'>Thông tin cá nhân</th>
			</tr>"; 
			echo "<tr>
			<th rowspan='5'><img src='".$row['hinhanh']." 'width=200px</th>
			<td>Tên đăng nhập: ".$row['tendangnhap']."
			<br>Giới tính: ".$row['gioitinh']."
			<br>Nghề nghiệp: ".$row['nghenghiep']."
			<br>Sở thích: ".$row['sothich']."
			</td>
			</tr>";
			echo "</table>";
		}

		echo "<table align=center>";
		echo "<tr>
			<th><a href='danhsachsanpham.php'>Danh sách sản phẩm</a></th>
			<th><a href='dangxuat.php'>Đăng xuất</a></th>
			<tr>";
			echo "</table>";
		$con->close();	
	?>
</body>
</html>