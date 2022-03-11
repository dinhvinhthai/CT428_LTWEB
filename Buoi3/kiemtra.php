<?php
    $con=new mysqli("localhost","id16411086_b1805814","K*XAZi9>d6p1ep$[","id16411086_buoi3");
	$con->set_charset("utf8");
	session_start();
    $ten=$_GET["name"];
    $sql="SELECT * FROM thanhvien WHERE tendangnhap='$ten'";
    $result=$con->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo "Tên đã tồn tại !";
        
        } 
        else 
        { 
            echo "";
            
        }
        $con->close();
?>