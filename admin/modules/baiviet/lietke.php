<?php 
		$conn = mysqli_connect('localhost', 'root', '', 'baitaplon');
		$result = mysqli_query($conn, 'select count(*) as total from baiviet');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		
        $limit = 6;
 
        $total_page = ceil($total_records / $limit);
		
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        $start = ($current_page - 1) * $limit;
		
		$sql= ("SELECT * FROM baiviet order by ThoiGianDang desc LIMIT $start,$limit");//asc : xếp tăng dần desc:giảm dần
		$i=1;
		$baiviet = $con->query($sql);
?>

<div class="right">
  <table width="750px" border="1" id="customers">
    <tr>
      <td style="text-align:center; width:50px; height:40px"><Strong>STT</Strong></td>
      <td style="text-align:center; width:100px"><Strong>Tiêu Đề</Strong></td>
      <td style="text-align:center; width:200px"><Strong>Hình Ảnh</Strong></td>
      <td style="text-align:center; width:95px"><Strong>Trạng Thái</Strong></td>
      <td style="text-align:center; width:130px"><Strong>Thời Gian Đăng</Strong></td>
      <td style="text-align:center; width:300px" colspan="2" ><Strong>Quản Lý</Strong></td>
    </tr>
    <?php			
				foreach($baiviet as $row){
			?>
    <tr>
      <td style="text-align:center; height:30px"><?php echo $i ?></td>
      <td style="text-align:center"><?php echo $row["TieuDe"] ?></td>
      <td style="text-align:center"><img style="padding-bottom:10px; padding-top:10px" src="../upload/<?php echo $row["TenAnh"] ?>" width="120px" height="120px" /></td>
      <td style="text-align:center"><?php echo $row["TrangThai"] ?></td>
      <td style="text-align:center"><?php echo $row["ThoiGianDang"] ?></td>
      <td style="text-align:center"><a href="Indexadmin.php?quanly=baiviet&ac=sua&id=<?php echo $row["idBaiViet"] ?>"><img src="img/sua.png"></a></td>
      <td style="text-align:center"><a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php echo $row["idBaiViet"] ?>" onClick="return confirm('Bạn có chắc muốn xóa <?php echo $row["TieuDe"]?> không ?')"><img src="img/xoa.png"></a></td>
    </tr>
    <?php
				$i++;
				}
			?>
  </table>	
  <div class="phantrang" style="padding-left: 20px; padding-top: 25px">
  <?php 
	if ($current_page > 1 && $total_page > 1){
		echo '<a href="Indexadmin.php?quanly=baiviet&ac=them&page='.($current_page-1).'" style="text-decoration: none; font-size: 16px; border: 2px solid #FFF; padding: 3px 10px;color: #fff; background-color: #1bc2a2" >Prev</a> ';
	}

	for ($i = 1; $i <= $total_page; $i++){
		if ($i == $current_page){
			echo '<span>'.$i.'</span> ';
		}
		else{
			echo '<a href="Indexadmin.php?quanly=baiviet&ac=them&page='.$i.'" style="text-decoration: none; font-size: 16px; border: 2px solid #FFF; padding: 3px 10px;color: #fff; background-color: #1bc2a2" >'.$i.'</a> ';
		}
	}

	if ($current_page < $total_page && $total_page > 1){
		echo '<a href="Indexadmin.php?quanly=baiviet&ac=them&page='.($current_page+1).'" style="text-decoration: none; font-size: 16px; border: 2px solid #FFF; padding: 3px 10px;color: #fff; background-color: #1bc2a2" >Next</a> ';
	}
	?>
	</div>
</div>
