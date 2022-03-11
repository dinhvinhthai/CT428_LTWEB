<?php
    $con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
	$con->set_charset("utf8");
	session_start();
	$idsp = $_GET['idsp'];
	$sql="DELETE FROM sanpham WHERE idsp='$idsp'";
	$result=$con->query($sql);
	header("location:danhsachsanpham.php");
	$con->close();
?>