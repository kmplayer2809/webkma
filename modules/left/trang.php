<?php
	$sub = "src";
	$pos = strlen(strstr($_GET["id"], $sub));
	if ($pos >0) {
		$str = $_GET['id'];
		$str = str_replace( 'src', '', $str );
		$sql = "SELECT * FROM baiviet WHERE TieuDe LIKE '%".$str."%' order by ThoiGianDang desc";
	}else{
		$sql = "select * from baiviet where idLoaiTin = '$_GET[id]'";
	}
	
	$baiviet = $con->query($sql);
	$sobaiviet = mysqli_num_rows($baiviet);
	
	$sotrang = ceil($sobaiviet/$num); //ceil: làm tròn ví dụ 2.5 làm tròn lên 3
?>

<div class="trang">
  <?php
	$i=1;
	$trang_hientai = isset($_GET['trang']) ? $_GET['trang'] : '1';
	while($i<=$sotrang) {
?>
  <a href="news.php?xem=loaitin&id=<?php echo $_GET["id"]?>&trang=<?php echo $i;?>" class="box-trang <?php if($i==$trang_hientai){ echo 'active';} ?>">
    <?php echo $i;?>
  </a>
  <?php
$i++;
}
?>
</div>