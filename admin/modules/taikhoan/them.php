<?php @session_start();
$message="";
     if(isset($_SESSION['errorThem'])){
	 
  $message = 'Tài khoản này đã tồn tại !'. $_SESSION['errorThem']; 	
  echo "<script type='text/javascript'>alert('$message')</script>";
   }
   unset ($_SESSION['errorThem']);
 ?>

<form action="modules/taikhoan/xuly.php" method="post" >
  <div class="left">
    <table width="300px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Thêm Mới Tài Khoản</Strong></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Tài Khoản</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tentaikhoan" id="tentaikhoan" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Mật Khẩu</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="matkhau" id="matkhau" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Họ Tên</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="hoten" id="hoten" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Giới Tính</td>
        <td style="text-align:left"><select style="width:150px; height:25px; margin-left:20px; " name="gioitinh" id="gioitinh" >
            <option value="1">Nam</option>
            <option value="0">Nữ</option>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Ngày Sinh</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="date" name="ngaysinh" id="ngaysinh" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Số Điện Thoại</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="tel" name="sodienthoai" id="sodienthoai" required placeholder="Dạng số: 0912345678" pattern="([0]{1})([1-9]{1})([0-9]{8})" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Email</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="email" name="email" id="email" required placeholder="abc@email.com" ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Địa Chỉ</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="diachi" id="diachi" required ></td>
      </tr>
      <tr>
        <td style="text-align:center; height:50px;" colspan="2"><input style="width:100px" type="submit" name="them" id="them" value="Thêm" >
          <input style="width:100px" type="reset" name="reset" id="reset" value="Làm Lại" ></td>
      </tr>
    </table>
  </div>
</form>
