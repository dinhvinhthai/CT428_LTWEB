
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body>
	<?php
	    $con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
		$con->set_charset("utf8");
		session_start();
		$idsp=$_POST['idsp'];
		$tensp=$_POST['tensp'];
		$chitietsp=$_POST['chitietsp'];
		$giasp=$_POST['giasp'];
		$duongdan="./sanpham/".$_FILES['hinhanhsp']['name'];
		move_uploaded_file($_FILES['hinhanhsp']['tmp_name'], $duongdan);
	
		if($duongdan == "./sanpham/"){
		    $sql="UPDATE sanpham SET tensp='$tensp', chitietsp='$chitietsp', giasp='$giasp' WHERE idsp='$idsp'";
    		$result=$con->query($sql);
    		header("Location:danhsachsanpham.php");
		}
        else
        {
		$sql="UPDATE sanpham SET tensp='$tensp', chitietsp='$chitietsp', giasp='$giasp', hinhanhsp='$duongdan' WHERE idsp='$idsp'";
		$result=$con->query($sql);
		header("Location:danhsachsanpham.php");
		$con->close();
        }
?>
</body>
</html>