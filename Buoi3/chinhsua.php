<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="color:Red"><center>Chỉnh sửa sản phẩm</center></h1>
	<p><center>Vui lòng điền đẩy đủ thông tin bên dưới</center></p>
	<form style="display:flex; justify-content:center;"action="xulychinhsua.php" method="POST" enctype="multipart/form-data">
	<div style="border:1px solid black; padding:10px">
		<table style="background-color:lightgray;" cellspacing="7" cellpadding="10">
			<tr>
				<td>Mã sản phẩm</td>
				<td><input type="int" name="idsp" value="<?php echo $_GET['idsp']; ?>" ></td>			
			</tr>	
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensp" value="<?php echo $_GET['tensp']; ?>"></td>
			</tr>
			<tr>
				<td>Chi tiết sản phẩm</td>
				<td><textarea name="chitietsp" rows="5" cols="50"><?php echo $_GET['chitietsp']; ?></textarea></td>
			</tr>
			<tr>
				<td>Giá sản phẩm</td>
				<td><input type="int" name="giasp" value="<?php echo $_GET['giasp']; ?>"> (VND)</td>
			</tr>
			<tr>
				<td>Hình ảnh</td>
				<td style="color:Red"><input type="file" name="hinhanhsp"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="dangky" value="Lưu sản phẩm">
					<input type="reset" name="lamlai" value="Làm lại">
				</td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>