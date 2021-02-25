<div class="box no-padding no-border" style="padding-top: 10px">
  <div class="tieudebox" style="padding-top:6px; padding-left:15px;color:#FFF;">Tin Cập Nhật</div>
  <div class="box-right" style="width:100%">
    <?php
	$sql="select idBaiViet, TieuDe, TenAnh from baiviet where idLoaiTin = 2 limit 11";//desc sắp xép giảm dần
	$baiviet = $con->query($sql);
	
	?>
    <?php foreach($baiviet as $row)
		{  ?>
    <div class="box-tin"> <br>
    <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" > <img src="upload/<?php echo $row["TenAnh"] ?>" height="150px" />
      <p><?php echo $row["TieuDe"] ?></P>
      </a>
      <div style="clear: both"> </div>
    </div>
    <?php } ?>
  </div>
  <div style="clear: both"> </div>
</div>
