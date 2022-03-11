<?php
    	$con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
		$con->set_charset("utf8");
		session_start();
		$idsp=$_GET['idsp'];
		$sql="SELECT hinhanhsp FROM sanpham WHERE idsp=$idsp";
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<img class='popup_image' id='myImage' src='".$row['hinhanhsp']."' width='250px'>";
		}
		$con->close();	
?>


