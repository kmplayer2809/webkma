<?php
	session_start();
	if($_SESSION["tentaikhoan"]=="") {
		header("location:Login.php");
		exit();
	}
?>
<html>
<head>
<meta charset='utf-8' >
<title>Học Viện Kỹ Thuật Mật Mã</title>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="./img/logoico.png" />
</head>

<body>
<div id="container" >

  <?php
		include("modules/config.php");
		include("modules/banner.php"); 
		include("modules/menu.php");
		include("modules/content.php");
		include("modules/footer.php");
	?>
</div>
</body>
</html>