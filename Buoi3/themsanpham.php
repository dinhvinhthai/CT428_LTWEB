<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="themsanpham.css" media="screen"/>
</head>
<body>
	<?php
		session_start();
    	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
		$con->set_charset("utf8");
		$tensp=$_POST['tensp'];
		$chitietsp=$_POST['chitietsp'];
		$giasp=$_POST['giasp'];

		$duongdan="./sanpham/" . $_FILES['hinhanhsp']['name'];
		move_uploaded_file($_FILES['hinhanhsp']['tmp_name'], $duongdan);
		$idtv=$_SESSION['id'];

		if ($tensp == "" || $chitietsp == "" || $giasp == "" || $duongdan == "./sanpham/") 
		{
			echo "Vui lòng nhập đầy đủ thông tin";
		}
		else
		{
			$sql="SELECT * FROM sanpham WHERE tensp='$tensp'";
			$kt=$con->query($sql);

			if(mysqli_num_rows($kt) > 0)
			{
				echo "Sản phẩm đã tồn tại";
			}
			else
			{
				$sql="INSERT INTO sanpham(tensp,chitietsp,giasp,hinhanhsp,idtv) VALUES ('$tensp','$chitietsp','$giasp','$duongdan','$idtv')";
				$con->query($sql);
				header("Location:danhsachsanpham.php");
			}
		}
		$con->close();	
	?>
</body>
</html>

