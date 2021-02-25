<?php
	$sql = "select * from baiviet where idBaiViet = '$_GET[id]' ";
	$baiviet = $con->query($sql);
	foreach($baiviet as $row)
?>

<form action="modules/baiviet/xuly.php?id=<?php echo $row["idBaiViet"]?>" method="post" enctype="multipart/form-data">
  <div class="left">
    <table width="350px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Sửa Bài Viết</Strong></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tiêu Đề</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tieude" id="tieude" required value="<?php echo $row["TieuDe"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Ảnh</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="file" name="tenanh" id="tenanh"  >
		<img style="margin-left:20px" src="../upload/<?php echo $row["TenAnh"]?>" width="50"/>
		</td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tóm Tắt</td>
        <td style="text-align:left"><textarea style="width:150px; margin-left:20px; margin-top: 10px; margin-bottom: 10px;" rows="10" name="tomtat" id="tomtat" required ><?php echo $row["TomTat"] ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Nội Dung</td>
        <td style="text-align:left"><textarea style="width:150px; margin-left:20px; margin-top: 10px; margin-bottom: 10px;" rows="20" name="noidung" id="noidung" required ><?php echo $row["NoiDung"] ?></textarea></td>
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
        <td style="text-align:left; height:35px; padding-left:10px; padding-right:5px">Thời Gian Đăng</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="date" name="thoigiandang" id="thoigiandang" required value="<?php echo $row["ThoiGianDang"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Nguồn Tin</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="nguontin" id="nguontin" required value="<?php echo $row["NguonTin"] ?>" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Mã Loại Tin</td>
        <td style="text-align:left"><?php 
					$sql="select idLoaiTin, TenLoaiTin from loaitin";
					$loaitin=$con->query($sql);
				?>
          <select style="width:150px; height:25px; margin-left:20px" name="maloaitin" id="maloaitin" >
            <?php
			while($dong_loaitin = mysqli_fetch_array($loaitin)){
				
			if($dong_loaitin["idLoaiTin"] == $row["idLoaiTin"]	){
		?>
            <option value="<?php echo $dong_loaitin["idLoaiTin"]?>" selected="selected"><?php echo $dong_loaitin["TenLoaiTin"]?></option>
            <?php
			}else{ ?>
            <option value="<?php echo $dong_loaitin["idLoaiTin"]?>" ><?php echo $dong_loaitin["TenLoaiTin"]?></option>
            <?php
			}
			}
			?>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Tài Khoản</td>
        <td style="text-align:left"><?php 
					$sql="select idTaiKhoan, HoTen from taikhoan";
					$taikhoan=$con->query($sql);
				?>
          <select style="width:150px; height:25px; margin-left:20px" name="tentaikhoan" id="tentaikhoan">
            <?php
			while($dong_taikhoan = mysqli_fetch_array($taikhoan)){
				
			if($dong_taikhoan["idTaiKhoan"] == $row["idTaiKhoan"]	){
		?>
            <option value="<?php echo $dong_taikhoan["idTaiKhoan"]?>" selected="selected"><?php echo $dong_taikhoan["HoTen"]?></option>
            <?php
			}else{ ?>
            <option value="<?php echo $dong_taikhoan["idTaiKhoan"]?>" ><?php echo $dong_taikhoan["HoTen"]?></option>
            <?php
			}
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
