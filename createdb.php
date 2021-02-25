<Html>
	<head>
	<meta charset="utf-8">
		<title>Form Đăng Ký</title>
	</head>
	<body>
	<form action="action.php" method="get">
		<table border='1px solid black' align='center' width='600'>
			<tr>
				<td align='center' colspan='2'>Thông Tin Hostting</td>
			</tr>
			<tr>
				<td width='200'>Tên Localhost</td>
				<td width='400'><input name='txtFullName' type='text' size='53'></td>
			</tr>
			<tr>
				<td width='200'>Username</td>
				<td width='400'><input name='txtUserName' type='text' size='53'></td>
			</tr>
			<tr>
				<td width='200'>Password</td>
				<td width='400'><input name='txtPass' type='Password' size='53'></td>
			</tr>
			<tr>
				<td width='200' colspan=2><strong>Tên Database Sẽ Đặt Mặc Định.<br> Tab Này Được Hiển Thị Trong Trường Hợp Chưa Có Database Hoặc Thông Tin Connect Lên Local Khác Nhau Giữa Các Máy !</strong></td>
			</tr>
			<tr>
				<td width='200'>Avatar</td>
				<td><img name='imgAvata' src='1.jpg' height='150' width='150'></td>
			</tr>
			<tr>
				<td align='center' colspan='2'>
				<input type="submit" value='Bấm Vào Để Tiếp Tục Phiêu Lưu Cùng Trang Web'>
				</td>
			</tr>
		</table>
	</form>
	</body>
</Html>