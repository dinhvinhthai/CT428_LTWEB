<?php
	$tendangnhap=$_POST['tendangnhap'];
	$matkhau=$_POST['matkhau'];
	$gioitinh=$_POST['gioitinh'];
	$nghenghiep=$_POST['nghenghiep'];
	$sothich=implode(", ",$_POST['sothich']);

	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
	$con->set_charset("utf8");

	$duongdan="./img/" . $_FILES['hinhdaidien']['name'];
	move_uploaded_file($_FILES['hinhdaidien']['tmp_name'], $duongdan);
	
	if ($tendangnhap == "" || $matkhau == "" || $gioitinh == "" || $nghenghiep == "" || $sothich == "") 
	{
		echo "Bạn vui lòng nhập đầy đủ thông tin. <a href='dangky.html'>Quay lại</a>";
		
	}
	else {
	    // Kiểm tra tài khoản đã tồn tại chưa
      	$sql="SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap'";
    	$kt=$con->query($sql);
    	if(mysqli_num_rows($kt) > 0)
    	{
    		echo "Tài khoản đã tồn tại. <a href='dangky.html'>Quay lại</a>";
    	}
    	else
    	{
    		//thực hiện việc lưu trữ dữ liệu vào db
    		$sql="INSERT INTO thanhvien(tendangnhap,matkhau,hinhanh,gioitinh,nghenghiep,sothich) VALUES ('$tendangnhap',md5('$matkhau'),'$duongdan','$gioitinh','$nghenghiep','$sothich')";
    		$con->query($sql);
    		echo "Đăng ký thành công. Ấn vào <a href='dangnhap.html'>đây</a> để đăng nhập";
    	}
	}
	$con->close();
?>