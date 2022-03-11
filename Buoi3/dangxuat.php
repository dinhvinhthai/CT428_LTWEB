<?php
	session_start();
	if(isset($_SESSION['id']) && $_SESSION['id'] != NULL){
	    unset($_SESSION['id']);
	    echo "Bạn đã đăng xuất thành công. Ấn vào <a href='dangnhap.html'>đây</a> để đăng nhập lại.";
	}

?>