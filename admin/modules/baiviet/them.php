<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
  <div class="left">
    <table width="350px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Thêm Mới Bài Viết</Strong></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tiêu Đề</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tieude" id="tieude" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Ảnh</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="file" name="tenanh" id="tenanh" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tóm Tắt</td>
        <td style="text-align:left"><textarea style="width:150px; margin-left:20px; margin-top: 10px; margin-bottom: 10px;" rows="10" name="tomtat" id="tomtat" required></textarea></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Nội Dung</td>
        <td style="text-align:left"><textarea style="width:150px; margin-left:20px; margin-top: 10px; margin-bottom: 10px;" rows="20" name="noidung" id="noidung" required></textarea></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Trạng Thái </td>
        <td style="text-align:left"><select style="width:150px; height:25px; margin-left:20px" name="trangthai" id="trangthai" >
            <option value="Hiển Thị" > Hiển Thị </option>
            <option value="Không Hiển Thị" > Không Hiển Thị </option>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px; padding-right:5px">Thời Gian Đăng</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="date" name="thoigiandang" id="thoigiandang" required></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Nguồn Tin</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="nguontin" id="nguontin" required></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Mã Loại Tin</td>
        <td style="text-align:left"><?php 
					$sql ="SELECT idLoaiTin, TenLoaiTin FROM loaitin";
					$loaitin = $con->query($sql);
				?>
          <select style="width:150px; height:25px; margin-left:20px" name="maloaitin" id="maloaitin" >
            <?php
			while($dong_loaitin = mysqli_fetch_array($loaitin)){
		?>
            <option value="<?php echo $dong_loaitin["idLoaiTin"]?>"><?php echo $dong_loaitin["TenLoaiTin"]?></option>
            <?php
			}
			?>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Tài Khoản</td>
        <td style="text-align:left"><?php 
					$sql ="SELECT idTaiKhoan, HoTen FROM taikhoan";
					$taikhoan = $con->query($sql);
				?>
          <select style="width:150px; height:25px; margin-left:20px" name="tentaikhoan" id="tentaikhoan" >
            <?php
			while($dong_taikhoan = mysqli_fetch_array($taikhoan)){
		?>
            <option value="<?php echo $dong_taikhoan["idTaiKhoan"]?>"><?php echo $dong_taikhoan["HoTen"]?></option>
            <?php
			}
			?>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:center; height:50px;" colspan="2"><input style="width:100px" type="submit" name="them" id="them" value="Thêm" >
          <input style="width:100px" type="reset" name="reset" id="reset" value="Làm Lại" ></td>
      </tr>
    </table>
  </div>
</form>
