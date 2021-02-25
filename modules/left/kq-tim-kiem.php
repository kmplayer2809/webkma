<?php
//Bước 1: Tạo kết nối đến CSDL
$con=mysqli_connect("localhost","root","","baitaplon");

if(isset($_GET['hvt'])){
	if($_GET['hvt']!=""){
		echo "<h1>Tìm kiếm với từ khóa '{$_GET['search']}'</h1>";
	}else{
		echo "<h1>Tất cả các bản ghi</h1>";
	}
//Bước 2: Xây dựng truy vấn, Chạy các câu lệnh
	if(isset($_GET['page'])){
		$p = $_GET['page'];
	}else{
		$p = 1;
	}
	//Tổng số bản ghi 1 trang = 10
	$maxpp = 10;
	$start = ($p-1)*$maxpp;
	$sql="SELECT * FROM baiviet WHERE TieuDe LIKE '%{$_GET['search']}%' LIMIT $start,$maxpp";
	//echo $sql;
//Bước 3: Xử lý kết quả trả về
	$i=1;
		$result = mysqli_query($con,$sql)
		or die ("Lỗi khi tạo test lệnh: " . mysqli_connect_error($con));
		if(mysqli_num_rows($result)>0){
			include("modules/left/kq-tim-kiem.php");
		}else{
			echo "<h1>Không tìm được kết quả với từ khóa '{$_GET['hvt']}'</h1>";
		}
		//Bước 4: Đóng kết nối và các biến đã sử dụng.
		mysqli_close($con);
		unset($result,$r,$sql,$i);
	}else{
		echo "Nhập thông tin tìm kiếm ở trên";
	}
?>
