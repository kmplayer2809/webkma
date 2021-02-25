<br>
<div class="box no-padding no-border" style="margin-top:10px;">
  <div class="tieudebox" style="padding-top:6px; padding-left:15px;color:#FFF;">Tin Liên Quan</div>
  <?php
	$sql="select * from baiviet where TrangThai = 'Hiển Thị' and idLoaiTin='$row[idLoaiTin]' and idBaiViet not in ($_GET[id]) order by ThoiGianDang desc limit 5";//desc sắp xép giảm dần
	$baiviet = $con->query($sql);
	foreach($baiviet as $row) {
		?>
  <div class="box-tin"> <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" > <img src="upload/<?php echo $row["TenAnh"] ?>" ></a>
    <p><i>Thời Gian Đăng : <?php echo $row["ThoiGianDang"] ?></i></P>
    <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" >
    <p>
    <h3><?php echo $row["TieuDe"] ?></h3>
    </P>
    </a>
    <p><?php echo $row["TomTat"] ?></P>
    <div style="clear: both"> </div>
  </div>
  <?php
	}  
	?>
  <div style="clear: both"> </div>
  <!------------------------------------------------------------------------> 
  
</div>
