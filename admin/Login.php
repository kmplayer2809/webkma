<?php
include("modules/config.php");
	session_start();
	
		if(isset($_POST["dangnhap"])) //kiểm tra nút đăng nhập có được bấm hay k?
	{	
		//lấy thông tin người dùng
		$tentaikhoan=$_POST["tentaikhoan"];
		$matkhau=$_POST["matkhau"];
		//kiểm tra
		$tentaikhoan=strip_tags($tentaikhoan);
		$matkhau=strip_tags($matkhau);
		if($tentaikhoan == "" || $matkhau == "")
		{
			$message = "Yêu câu nhập đầy đủ thông tin !";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
		$sql = "select * from taikhoan where TenTaiKhoan='$tentaikhoan' and MatKhau='$matkhau'";
		$query= mysqli_query($con,$sql);
		$num_row = mysqli_num_rows($query);
		if($num_row ==0)
		{
			$message = "Bạn đã nhập sai thông tin !";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else
		{	
			//đăng nhập vào session
			$_SESSION["tentaikhoan"] = $tentaikhoan;
			header("location:Indexadmin.php");
		}
		}
	}
	else if($_GET["ac"]=="thoat")
	{
		session_destroy();
		header("location: Login.php");
	}
?>
<html>
<head>
<meta charset='utf-8' >
<title>System Login</title>
<link href="css/stylelogin.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="./img/logoico.png" />
</head>

<body>
<img width="100%" height="100%" src="img/login.png">
<div class="login">
  <form action="Login.php" method="POST">
    <table width="500px" border="0" >
      <tr>
        <td rowspan="3" style="color:white; font-size:45px;">ACT<span style="color:red">Login</span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><input type="text" placeholder="Nhập tên tài khoản" name="tentaikhoan">
          <br>
          <br></td>
      </tr>
      <tr>
        <td><input type="password" placeholder="Nhập mật khẩu" name="matkhau">
          <br>
          <br></td>
      </tr>
      <tr>
        <td><input type="submit" name="dangnhap" value="Login">
          <br></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>