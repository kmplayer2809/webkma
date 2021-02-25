<?php 
	session_start();
	include("../config.php");
	$tentaikhoan=$_POST["tentaikhoan"];
	$matkhau=$_POST["matkhau"];
	$hoten=$_POST["hoten"];
	$gioitinh=$_POST["gioitinh"];
	$ngaysinh=$_POST["ngaysinh"];
	$sodienthoai=$_POST["sodienthoai"];
	$email=$_POST["email"];
	$diachi=$_POST["diachi"];
	$id=$_GET["id"];
	if(isset($_POST["them"])){
		//thêm dữ liệu
		$tontai = mysqli_query($con,"SELECT TenTaiKhoan FROM taikhoan WHERE TenTaiKhoan= '$tentaikhoan'");
		if(mysqli_num_rows($tontai)>0){
		   $_SESSION['errorThem'] = $tentaikhoan;
		}
		 else
		{
		$sql="insert into taikhoan(TenTaiKhoan, MatKhau, HoTen, GioiTinh, NgaySinh, SoDienThoai, Email, DiaChi)
		value('$tentaikhoan','$matkhau','$hoten','$gioitinh','$ngaysinh','$sodienthoai','$email','$diachi')";
		$con->query($sql);
		}
		header("location:../../Indexadmin.php?quanly=taikhoan&ac=them");
	} else if(isset($_POST["sua"])) {
			//sửa dữ liệu
			$sql="update taikhoan set TenTaiKhoan='$tentaikhoan', MatKhau='$matkhau', HoTen='$hoten', GioiTinh='$gioitinh', NgaySinh='$ngaysinh', SoDienThoai='$sodienthoai', Email='$email', DiaChi='$diachi' where idTaiKhoan='$id'";
			$con->query($sql);
		header("location:../../Indexadmin.php?quanly=taikhoan&ac=sua&id=".$id);
		} else {
			//xóa dữ liệu
			$sql = "DELETE FROM taikhoan WHERE idTaiKhoan = '$id'";
			$con->query($sql);
		header("location:../../Indexadmin.php?quanly=taikhoan&ac=them");
		}
?>