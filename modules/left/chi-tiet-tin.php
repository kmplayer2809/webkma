<?php
	$sql = "select * from baiviet where idBaiViet = '$_GET[id]'";
	$baiviet = $con->query($sql);
	foreach($baiviet as $row)
?>

<div class="box anhchitiet">
  <p class="tieude"><Strong>
    <?php echo $row["TieuDe"] ?></Strong></p>
  <br>
  <!-- <p class="thoigiandang"><i>Thời Gian Đăng : <?php echo $row["ThoiGianDang"] ?></i></p>
  <br>
  <p class="tomtat"><Strong><?php echo $row["TomTat"] ?></Strong></p>
  <br>
  <p><img src="upload/<?php echo $row["TenAnh"] ?> " width="500px" height="300px" ></p>
  <br> -->
  <p class="noidung"><?php echo $row["NoiDung"] ?></p>
  <br>
  <br>
  <p class="nguontin"><i>Nguồn Tin : <?php echo $row["NguonTin"] ?></i></p>
</div>
