<?php
	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
	$con->set_charset("utf8");
	session_start();
	$id=$_SESSION['id'];
	$kq=$_GET['kqtk'];
	$sql= "SELECT * FROM sanpham WHERE (tensp LIKE '%".$kq."%') AND (idtv='$id')";
	$result=$con->query($sql);
	if(mysqli_num_rows($result) == 0){
	    echo "<p align='center'>Không tìm thấy sản phẩm !!!</p>";
	}
	else{
	while($row = $result->fetch_assoc()){
	    echo "<div align='center'>
	    <br>
	    <a class='a_timkiem' href='chitietsanpham.php?idsp=".$row['idsp']."'>".$row['tensp']."</a>
	    </div>";
			}
	}
?>