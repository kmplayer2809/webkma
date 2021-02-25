<?php 
	$sql= ("SELECT idLoaiTin, TenLoaiTin FROM loaitin where TrangThai = 'Hiển Thị' order by ThuTu asc ");//asc : xếp tăng dần desc:giảm dần
	$loaitin = $con->query($sql);
			
?>
<div id="menu">
  
  <ul>
    <li><a href="Index.php">Trang Chủ</a></li>
    <?php
		foreach($loaitin as $row) 
		{ 
?>
    <li> <a href="Index.php?xem=loaitin&id=<?php echo $row["idLoaiTin"] ?>"><?php echo $row["TenLoaiTin"]; ?></a> </li>
    <?php
		}
?>
  </ul>
</div>
