<?php
	$tenmaychu="localhost";
	$taikhoan="root";
	$matkhau="";
	$con=mysqli_connect($tenmaychu,$taikhoan,"");
	if (mysqli_connect_errno($con)){
		$url = 'createdb.php';
		header( "Location: $url" );
	}
	$sql="CREATE DATABASE baitaplon CHARACTER SET utf8 COLLATE utf8_general_ci";
	
	if (mysqli_query($con,$sql)){
		$url = 'createdb.php';
		header( "Location: $url" );
	}else{
		$csdl="baitaplon";
		$con = mysqli_connect($tenmaychu,$taikhoan,$matkhau,$csdl); 
		mysqli_set_charset($con, 'UTF8'); 
	}
?>