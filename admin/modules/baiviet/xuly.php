<?php
	session_start();
	include("../config.php");
	$tieude = $_POST["tieude"];
	/* $tenanh = $_POST["tenanh"]; */
	$tomtat = $_POST["tomtat"];
	$noidung = $_POST["noidung"];
	$trangthai = $_POST["trangthai"];
	$thoigiandang = $_POST["thoigiandang"];
	$nguontin = $_POST["nguontin"];
	$maloaitin = $_POST["maloaitin"];
	$tentaikhoan = $_POST["tentaikhoan"];
	$id=$_GET["id"];
	if(isset($_POST["them"])){
		//thêm dữ liệu
		$tenanh = $_FILES["tenanh"]["name"]; //lay ten anh dc chon
		if($tenanh!="")
		{
			$dich="../../../upload/" . $tenanh; //dinh nghia duong dan toi thu muc anh
			copy($_FILES["tenanh"]["tmp_name"],$dich);
			$dich=substr($dich,16,strlen($dich)-16);	
		}
		$sql="insert into baiviet(TieuDe, TenAnh, TomTat, NoiDung, TrangThai, ThoiGianDang, NguonTin, idLoaiTin, idTaiKhoan)
		value('$tieude', '$tenanh','$tomtat','$noidung','$trangthai','$thoigiandang','$nguontin','$maloaitin','$tentaikhoan')";
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=baiviet&ac=them");
		} else if(isset($_POST["sua"])) {
		//sửa dữ liệu
		$tenanh = $_FILES["tenanh"]["name"]; //lay ten anh dc chon
		if($tenanh!="")
		{
			$dich="../../../upload/" . $tenanh; //dinh nghia duong dan toi thu muc anh
			copy($_FILES["tenanh"]["tmp_name"],$dich);
			$dich=substr($dich,16,strlen($dich)-16);	
			$sql="update baiviet set TieuDe='$tieude', TenAnh='$dich', TomTat='$tomtat', NoiDung='$noidung',TrangThai='$trangthai', ThoiGianDang='$thoigiandang', NguonTin='$nguontin', idLoaiTin='$maloaitin', idTaiKhoan='$tentaikhoan' where idBaiViet='$id'";
		}else {
			$sql="update baiviet set TieuDe='$tieude', TomTat='$tomtat', NoiDung='$noidung',TrangThai='$trangthai', ThoiGianDang='$thoigiandang', NguonTin='$nguontin', idLoaiTin='$maloaitin', idTaiKhoan='$tentaikhoan' where idBaiViet='$id'";

		}
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=baiviet&ac=sua&id=".$id);

/* 		$sql="update baiviet set TieuDe='$tieude', TenAnh='$tenanh', TomTat='$tomtat', NoiDung='$noidung',TrangThai='$trangthai', ThoiGianDang='$thoigiandang', NguonTin='$nguontin', idLoaiTin='$maloaitin', idTaiKhoan='$tentaikhoan' where idBaiViet='$id'";
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=baiviet&ac=sua&id=".$id);
 */		} else {
		//xóa dữ liệu
		$sql = "DELETE FROM baiviet WHERE idBaiViet = '$id'";
		$con->query($sql);
		header("location:../../Indexadmin.php?quanly=baiviet&ac=them");
	}
?>