<?php @session_start();
$message="";
     if(isset($_SESSION['errorThem'])){
  $message = 'Thứ tự hiển thị không thể trùng nhau. Yêu cầu nhập lại!'. $_SESSION['errorThem']; 	
  echo "<script type='text/javascript'>alert('$message')</script>";
   }
   unset ($_SESSION['errorThem']);
 ?>

<form action="modules/loaitin/xuly.php" method="post" >
  <div class="left">
    <table width="300px" border="1" id="customers">
      <tr>
        <td style="text-align:center; height:50px" colspan="2"><Strong>Chức Năng Thêm Mới Loại Tin</Strong></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Tên Loại Tin</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="text" name="tenloaitin" id="tenloaitin" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Thứ Tự</td>
        <td style="text-align:left"><input style="width:150px; height:25px; margin-left:20px" type="number" name="thutu" id="thutu" required ></td>
      </tr>
      <tr>
        <td style="text-align:left; height:35px; padding-left:10px">Trạng Thái </td>
        <td style="text-align:left"><select style="width:150px; height:25px; margin-left:20px" name="trangthai" id="trangthai" >
            <option value="Hiển Thị" > Hiển Thị </option>
            <option value="Không Hiển Thị" > Không Hiển Thị </option>
          </select></td>
      </tr>
      <tr>
        <td style="text-align:center; height:50px;" colspan="2"><input style="width:100px" type="submit" name="them" id="them" value="Thêm" >
          <input style="width:100px" type="reset" name="reset" id="reset" value="Làm Lại" ></td>
      </tr>
    </table>
  </div>
</form>
