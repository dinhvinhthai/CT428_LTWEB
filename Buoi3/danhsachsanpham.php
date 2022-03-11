<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dssp.css" media="screen"/>
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
		$sql="SELECT hinhanhsp FROM sanpham WHERE idtv=$id";
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()){
				echo "<div>";
				echo "<tr>
				<td><img class='mySlides' src='".$row['hinhanhsp']."'></td>
				</tr>";
				echo "</div>";
		}
		$sql="SELECT * FROM sanpham WHERE idtv=$id";
		$result = $con->query($sql);
		    echo "<h1>Danh sách sản phẩm</h1>";
			echo "<table align='center' class='bangdssp'>";
			echo "<tr>
			</tr>"; 
			echo "<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Giá</th>
			<th colspan='3'>Lựa chọn</th>
			</tr>";
			while($row = $result->fetch_assoc()){
				echo "<tr>
				<td>".$row['idsp']."</td>
				<td>
    				<p onmouseover='Popup(".$row['idsp'].")' onmouseout='Hide()'>".$row['tensp']."</p>
				</td>
				<td>".$row['giasp']." VND</td>
				<td>
					<a class='txt' href='chitietsanpham.php?idsp=".$row['idsp']."'>Xem chi tiết (B3)</a>
					<br>
				    <button type='button' onclick='Xemchitiet(".$row['idsp'].")'>Xem chi tiết (B4)</button>
				</td>
				<td><a href='chinhsua.php?idsp=".$row['idsp']."&tensp=".$row['tensp']."&giasp=".$row['giasp']."&chitietsp=".$row['chitietsp']."'><img class='iconn' src='img/edit.png'></a></td>
				<td><a href='xoa.php?idsp=".$row['idsp']."'><img class='iconn' src='img/delete.png'></a></td>
				</tr>";
			}
			echo "</table>";
 		    echo "<p align='center' id='myPopup'></p>";
			echo "<table align=center>";
			echo "<tr>
				<th><a href='themsanpham.html'>Thêm sản phẩm</a></th>
				<th><a href='thongtin.php'>Thông tin<br>người dùng</a></th>
				<th><a href='dangxuat.php'>Đăng xuất</a></th>
				<tr>";
			echo "</table>";
			
			echo "<div id='myDiv'></div>";

			echo "<div align='center'>
			    <h2>Tìm kiếm</h2>
			    <input type='text' onkeyup='timkiem(this.value)'>
			    </div>";
	        echo "<div id='ketquatk'></div>";
	        echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			$con->close();	
	?>

	<script>
	var myIndex = 0;
	img_auto();

	function img_auto() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(img_auto, 2000); // Change image every 2 seconds
	}

	function Xemchitiet(str) {
		var xmlhttp;
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","chitietsanpham.php?idsp="+str,true);
		xmlhttp.send();
	}

	function Popup(str) {
		var xmlhttp;
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("myPopup").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","popup_image.php?idsp="+str,true);
		xmlhttp.send();
	}
	
	function Hide(){
	    document.getElementById("myPopup").innerHTML="";
	 }
	 
	 function timkiem(str) {
        if (str.length==0) {
            document.getElementById("ketquatk").innerHTML="";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                  document.getElementById("ketquatk").innerHTML=this.responseText;      
            }
        }
        xmlhttp.open("GET","timkiem.php?kqtk="+str,true);
        xmlhttp.send();
        }
	</script>
</body>
</html>