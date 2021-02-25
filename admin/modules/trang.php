<?php
	$sql = "SELECT * FROM baiviet order by ThoiGianDang desc";
	/* $baiviet = $con->query($sql);
	$sobaiviet = mysqli_num_rows($baiviet);
	$sot */rang = ceil($sobaiviet/$num); //ceil: làm tròn ví dụ 2.5 làm tròn lên 3
?>

<div class="trang">
  <?php	
	$i=1;
	while($i<=$sotrang) {
?>
  <a href="Indexadmin.php?quanly=baiviet&ac=them&trang=<?php echo $i;?>">
  <div class="box-trang">
    <?php
	echo $i;
?>
  </div>
  </a>
  <?php
$i++;
}
?>
</div>
