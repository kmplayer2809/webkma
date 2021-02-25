<?php
	$sql = "select * from loaitin where idLoaiTin = '$_GET[id]' ";
	$loaitin = $con->query($sql);
	foreach($loaitin as $row) {
?>

<form action="modules/loaitin/xuly.php?id=<?php echo $row["idLoaiTin"] ?>" method="POST">
  <div class="left">
    <table width="300px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Sửa Loại Tin</td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Loại Tin</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tenloaitin" id="tenloaitin" required value="<?php echo $row["TenLoaiTin"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Thứ Tự</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="number" name="thutu" id="thutu" required value="<?php echo $row["ThuTu"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Trạng Thái </td>
        <td style="text-align:left"><select style="width:150px; height:25px; margin-left:20px" name="trangthai" id="trangthai" >
            <?php
					if($row["TrangThai"]=="Hiển Thị") {
				?>
            <option value="Hiển Thị" selected ="selected" > Hiển Thị </option>
            <option value="Không Hiển Thị" > Không Hiển Thị </option>
            <?php 
					} else {
				?>
            <option value="Hiển Thị" > Hiển Thị </option>
            <option value="Không Hiển Thị" selected="selected" > Không Hiển Thị </option>
            <?php 
					} 
				?>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:center; height:50px;" colspan="2"><input style="width:100px" type="submit" name="sua" id="sua" onClick="return confirm('Bạn có chắc muốn sửa không ?')" value="Cập Nhật" >
          <input style="width:100px" type="reset" name="reset" id="reset" value="Làm Lại" ></td>
      </tr>
    </table>
  </div>
</form>
<?php } ?>
