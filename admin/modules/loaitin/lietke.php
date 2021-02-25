<?php 
		$i = 1;//Hiển thị stt tăng dần từ 1
		$sql= ("SELECT * FROM loaitin order by ThuTu asc");//asc : xếp tăng dần desc:giảm dần
		$loaitin = $con->query($sql); {
?>

<div class="right">
  <table width="600px" border="1" id="customers">
    <tr>
      <td style="text-align:center; width:70px; height:40px"><Strong>STT</Strong></td>
      <td style="text-align:center; width:210px"><Strong>Tên Loại Tin</Strong></td>
      <td style="text-align:center; width:70px"><Strong>Thứ Tự</Strong></td>
      <td style="text-align:center; width:140px"><Strong>Trạng Thái</Strong></td>
      <td style="text-align:center; width:180px" colspan="2" ><Strong>Quản Lý</Strong></td>
    </tr>
    <?php			
				foreach($loaitin as $row){
			?>
    <tr>
      <td style="text-align:center; height:30px"><?php echo $i ?></td>
      <td style="padding-left:10px"><?php echo $row["TenLoaiTin"] ?></td>
      <td style="text-align:center"><?php echo $row["ThuTu"] ?></td>
      <td style="text-align:center"><?php echo $row["TrangThai"] ?></td>
      <td style="text-align:center"><a href="Indexadmin.php?quanly=loaitin&ac=sua&id=<?php echo $row["idLoaiTin"] ?>"><img src="img/sua.png"></a></td>
      <td style="text-align:center"><a href="modules/loaitin/xuly.php?xoa=loaitin&id=<?php echo $row["idLoaiTin"] ?>" onClick="return confirm('Bạn có chắc muốn xóa <?php echo $row["TenLoaiTin"]?> không ?')"><img src="img/xoa.png"></a></td>
    </tr>
    <?php
				$i++;
				}
			?>
  </table>
</div>
<?php } ?>
