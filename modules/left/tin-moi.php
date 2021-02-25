<div class="box">
  
  <?php
	$sql="select * from baiviet where idBaiViet = 122";//desc sắp xép giảm dần
	$baiviet = $con->query($sql);
	foreach($baiviet as $row) {
?>
  <div class="box-left"> <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" > <img style="margin-bottom: 10px;" src="upload/<?php echo $row["TenAnh"] ?>" height="300px"> </a>
    <p class="tieudetin"><a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" ><?php echo $row["TieuDe"] ?></a></p>
    
    <p class="tomtattin"><?php echo $row["TomTat"] ?></p>
  </div>
  <?php } ?>
  <!-- <div class="box-right">
    <ul>
      <?php
				$sql="select * from baiviet where idLoaiTin = 3 limit 12";
				$baiviet = $con->query($sql);
				foreach($baiviet as $row) {
			?>
      <li><a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" ><?php echo $row["TieuDe"] ?></a></li>
      <?php } ?>
    </ul>
  </div> -->
  <div style="clear: both"> </div>
</div>
