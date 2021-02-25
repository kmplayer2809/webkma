<div id="content">
  <div id="content-left">
    <?php
			$tam = (isset($_GET["xem"])) ? $_GET["xem"] : "";
			if($tam == "baiviet")
			{
				include("modules/left/chi-tiet-tin.php");
				include("modules/left/tin-lien-quan.php");
			} 
			else if($tam=="loaitin")
			{
				include("modules/left/chi-tiet-loai-tin.php");
			}
			else
			{
				include("modules/left/tin-moi.php");
				include("modules/left/box-tin.php");
			}
		?>
  </div>
  <div id="content-right">
    <?php
			include("modules/right/tim-kiem.php");
			include("modules/right/tin-cap-nhat.php");
		?>
  </div>
</div>
<div style="clear: both"></div>
