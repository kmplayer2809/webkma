<?php 
		$i = 1;//Hiển thị stt tăng dần từ 1
		$sql= ("SELECT * FROM taikhoan WHERE 1 order by idTaiKhoan asc");//asc : xếp tăng dần desc:giảm dần
		$taikhoan = $con->query($sql);
?>

<div class="right">
  <table width="750px" border="1" id="customers">
    <tr>
      <td style="text-align:center; width:70px; height:40px"><Strong>STT</Strong></td>
      <td style="text-align:center; width:150px"><Strong>Tên Admin</Strong></td>
      <td style="text-align:center; width:250px"><Strong>Email</Strong></td>
      <td style="text-align:center; width:140px"><Strong>Số Điện Thoại</Strong></td>
      <td style="text-align:center; width:180px" colspan="2" ><Strong>Quản Lý</Strong></td>
    </tr>
    <?php			
				foreach($taikhoan as $row){
			?>
    <tr>
      <td style="text-align:center; height:30px"><?php echo $i ?></td>
      <td style="text-align:center"><?php echo $row["HoTen"] ?></td>
      <td style="text-align:center"><?php echo $row["Email"] ?></td>
      <td style="text-align:center"><?php echo $row["SoDienThoai"] ?></td>
      <td style="text-align:center"><a href="Indexadmin.php?quanly=taikhoan&ac=sua&id=<?php echo $row["idTaiKhoan"] ?>"><img src="img/sua.png"></a></td>
      <td style="text-align:center"><a href="modules/taikhoan/xuly.php?xoa=taikhoan&ac=xoa&id=<?php echo $row["idTaiKhoan"] ?>" onClick="return confirm('Bạn có chắc muốn xóa <?=$row["TenTaiKhoan"];?> không ?')"><img src="img/xoa.png"></a></td>
    </tr>
    <?php
				$i++;
				}
			?>
  </table>
</div>
