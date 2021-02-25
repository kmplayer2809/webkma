<div id="content">
  <?php
		$tam=(isset($_GET["quanly"])) ? $_GET["quanly"] : "";/* {
			$tam=$_GET["quanly"];
		}else{
			$tam="";
		} */
		if($tam=="loaitin")
		{
			include("modules/loaitin/main.php");
		} else if($tam=="baiviet"){
			include("modules/baiviet/main.php");
		} else if($tam=="taikhoan"){
			include("modules/taikhoan/main.php");
		}
		/* $tam = (isset($_GET["quanly"])) ? $_GET["quanly"] : "" ;
		switch($tam)		
		{
			case "quanly":
			{
				$loaitin = (isset($_GET["loaitin"])) ? $_GET["loaitin"] : "" ;
					switch($mlsp)
					{
						case "loaitin":
							  include_once("modules/loaitin/main.php");
							  break;
						case "$baiviet":
							  include_once("modules/baiviet/main.php");
							  break;
					}
					break;
			}
		} */
	?>
</div>
