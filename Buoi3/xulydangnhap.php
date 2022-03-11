<?php
	session_start();
	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
	$con->set_charset("utf8");

	$tendangnhap=$_POST['tendangnhap'];
	$matkhau=$_POST['matkhau'];
	$matkhaumahoa=md5($matkhau);

	$con->set_charset("utf8");
	$sql="SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap'";
	$kt=$con->query($sql);
	if(mysqli_num_rows($kt) == 0)
	{
		echo "Tài khoản không tồn tại ! <a href='dangnhap.html'>Quay lại";
	}
	else
	{
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' and matkhau='$matkhaumahoa'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
		$_SESSION['id'] = $row['id'];
		if($result->num_rows > 0) 
		{
			header("Location:thongtin.php");
		}
		else
		{
			echo "Mật khẩu sai ! <a href='dangnhap.html'>Quay lại";
		}
	}
	$con->close();
?>