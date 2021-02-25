<?php
	$sql = "select * from taikhoan where idTaiKhoan = '$_GET[id]' ";
	$taikhoan = $con->query($sql);
	foreach($taikhoan as $row) {
?>

<form action="modules/taikhoan/xuly.php?id=<?php echo $row["idTaiKhoan"] ?>" method="POST">
  <div class="left">
    <table width="300px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Sửa Tài Khoản</Strong></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Tài Khoản</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tentaikhoan" id="tentaikhoan" required value="<?php echo $row["TenTaiKhoan"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Mật Khẩu</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="matkhau" id="matkhau" required value="<?php echo $row["MatKhau"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Họ Tên</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="hoten" id="hoten" required value="<?php echo $row["HoTen"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Giới Tính</td>
        <td style="text-align:left"><select style="width:150px; height:25px; margin-left:20px; " name="gioitinh" id="gioitinh" >
            <?php if ($row["GioiTinh"]=="1") {?>
            <option value="1" selected ="selected">Nam</option>
            <option value="0">Nữ</option>
            <?php
	} else {
			?>
            <option value="1">Nam</option>
            <option value="0" selected ="selected">Nữ</option>
            <?php } ?>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Ngày Sinh</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" required type="date" name="ngaysinh" id="ngaysinh" value="<?php echo $row["NgaySinh"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Số Điện Thoại</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" required type="tel" name="sodienthoai" id="sodienthoai" placeholder="Dạng số: 0912345678" pattern="([0]{1})([1-9]{1})([0-9]{8})"  value="<?php echo $row["SoDienThoai"] ?>"></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Email</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" required type="email" name="email" id="email" placeholder="abc@email.com" value="<?php echo $row["Email"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Địa Chỉ</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" required type="text" name="diachi" id="diachi" value="<?php echo $row["DiaChi"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:center; height:50px;" colspan="2"><input style="width:100px" type="submit" name="sua" id="sua" onClick="return confirm('Bạn có chắc muốn sửa không ?')" value="Cập Nhật" >
          <input style="width:100px" type="reset" name="reset" id="reset" value="Làm Lại" ></td>
      </tr>
    </table>
  </div>
</form>
<?php } ?>
