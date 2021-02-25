<?php
	session_start();
	include("../config.php");
	$tenloaitin=$_POST["tenloaitin"];
	$thutu=$_POST["thutu"];
	$trangthai=$_POST["trangthai"];
	$id=$_GET["id"];
	if(isset($_POST["them"])){
		//thêm dữ liệu
		$tontai = mysqli_query($con,"SELECT ThuTu FROM loaitin WHERE ThuTu= '$thutu'");
		if(mysqli_num_rows($tontai)>0){
		$_SESSION['errorThem'] = $thutu;
		} else {
		$sql="insert into loaitin(TenLoaiTin,ThuTu,TrangThai) value('$tenloaitin','$thutu','$trangthai')";
		$con->query($sql);
		}
		header("location:../../Indexadmin.php?quanly=loaitin&ac=them");
	} else if(isset($_POST["sua"])) {
		//sửa dữ liệu
		$sql="update loaitin set TenLoaiTin='$tenloaitin', ThuTu='$thutu', TrangThai='$trangthai' where idLoaiTin='$id'";
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=loaitin&ac=sua&id=".$id);
		} else {
		//xóa dữ liệu
		$sql = "DELETE FROM loaitin WHERE idLoaiTin = '$id'";
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=loaitin&ac=them");
		}
?>