<?php
	$num = 9; //số bài viết trên 1 trang
	$trang = isset($_GET["trang"]) ? $_GET["trang"] : 1;
	$batdau = ($trang - 1)* $num;
	$sub = "src";
	$pos = strlen(strstr($_GET["id"], $sub));
	if ($pos >0) {
		$str = $_GET['id'];
		$str = str_replace( 'src', '', $str );
		$sql = "SELECT * FROM baiviet WHERE TieuDe LIKE '%".$str."%' and TrangThai = 'Hiển Thị' order by ThoiGianDang desc limit $batdau, $num";
	}else{
		$sql = "select * from baiviet where idLoaiTin = '$_GET[id]' and TrangThai = 'Hiển Thị' order by ThoiGianDang desc limit $batdau, $num";
	}
	$baiviet = $con->query($sql);
	$dem = 0;
	foreach($baiviet as $row)
		$dem++;
	if($dem == 0)
		echo 'KHÔNG THẤY THÔNG TIN BÀI VIẾT CẦN TÌM';
	 
?>

<div class="box">
  <div class="box-right" style="width:100%">
    <?php foreach($baiviet as $row) { ?>
    <div class="box-tin"> <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>"> <img src="upload/<?php echo $row["TenAnh"] ?>" /> </a>
      <p><i>Thời Gian Đăng : <?php echo $row["ThoiGianDang"] ?></i></p>
      <p><a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>"><Strong><?php echo $row["TieuDe"] ?></Strong></a></P>
      <p><?php echo $row["TomTat"] ?></p>
      <div style="clear: both"> </div>
    </div>
    <?php } ?>
  </div>
  <?php
		include("modules/left/trang.php");
	?>
  <div style="clear: both"> </div>
</div>
