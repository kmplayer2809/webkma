<?php
$currentURL1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$currentURL = "news.php?xem=loaitin";
?>
<Script>
	function addurl(Str){
		cururl = (document.getElementById('tim').href).split('&id=')
		document.getElementById('tim').href = cururl[0]+'&id=src'+Str;
	}
	
	
</Script>
<div style="display:flex; align-items:center">
<input onkeyup = "addurl(this.value)" style="height: 30px;line-height:30px;  width: 230px; border-radius: 5px;margin-right:5px;border:1px solid #ddd; outline:none; padding-left: 10px;padding-right: 10px;" onload="addurl('1')">
<a href = "<?php echo $currentURL?>" id = "tim" style="text-decoration: none;font-size:15px; padding-left: 17px; padding-right:17px; line-height:30px; border: 1px solid #ddd;height: 30px ;border-radius: 5px; background-color:#252525; color:#fff;outline:none">Tìm Kiếm</a>
</div>

<style>
	input:focus{
		outline:none;
		
	}
</style>