<div class="box no-padding no-border" style="margin-top:10px;">
  <div class="tieudebox" style="padding-top:6px; padding-left:15px;color:#FFF;">Tin nổi bật </div>
  <?php
	$sql="select * from baiviet, loaitin where baiviet.idLoaiTin = loaitin.idLoaiTin and loaitin.idLoaiTin = 1 and baiviet.TrangThai = 'Hiển Thị' order by ThoiGianDang desc limit 5";//desc sắp xép giảm dần
	$baiviet = $con->query($sql);
	foreach($baiviet as $row) {
    ?>
    <br>
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
  <!-- <br>
  <div class="tieudebox" style="padding-top:6px; padding-left:15px;color:#FFF;">Khoa Học</div>
  <?php
	$sql="select * from baiviet, loaitin where baiviet.idLoaiTin = loaitin.idLoaiTin and loaitin.idLoaiTin = 2 and baiviet.TrangThai = 'Hiển Thị' order by ThoiGianDang desc limit 5";//desc sắp xép giảm dần
	$baiviet = $con->query($sql);
	foreach($baiviet as $row) {
		?>
  <div class="box-tin"> <a href="news.php?xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" > <img src="upload/<?php echo $row["TenAnh"] ?>" ></a>
    <p><i>Thời Gian Đăng : <?php echo $row["ThoiGianDang"] ?></i></P>
    <a href="
    xem=baiviet&id=<?php echo $row["idBaiViet"] ?>" >
    <p>
    <h3><?php echo $row["TieuDe"] ?></h3>
    </P>
    </a>
    <p><?php echo $row["TomTat"] ?></P>
    <div style="clear: both"> </div>
  </div>
  <?php
	}  
	?> -->

  <div style="clear: both"> </div>
</div>
